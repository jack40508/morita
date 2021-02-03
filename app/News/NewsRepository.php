<?php
    namespace App\News;

    use Illuminate\Http\Request;
    use Auth;
    use App\News\News;
    use App\News\NewstagRepository;
    use App\News\NewsNewstagRepository;
    use App\News\Newsimage;

    class NewsRepository{

        public function __construct(News $news, NewstagRepository $newstag, NewsNewstagRepository $newsnewstag, Newsimage $newsimage){
            $this->news = $news;
            $this->newstag = $newstag;
            $this->newsnewstag = $newsnewstag;
            $this->newsimage = $newsimage;
        }

        public function getAllNews(){

            $news = $this->news->get();

            return $news;
        }

        public function getFirstNewsimage($news_id){

            $newsimage = $this->newsimage->where('news_id', $news_id)->orderBy('id')->first();

            return $newsimage;
        }

        public function getFrontNewestNewsOfOpen($num){
            $news = $this->news->where('upload_at', '<=', date('Y/m/d H:i:s'))->where('permission', true)->orderBy('id', 'DESC')->orderBy('created_at', 'DESC')->orderBy('upload_at', 'DESC')->limit($num)->get();

            return $news;
        }

        public function getAllOpenNews(){
            $news = $this->news->where('upload_at', '<=', date('Y/m/d H:i:s'))->where('permission', true)->orderBy('id', 'DESC')->orderBy('created_at', 'DESC')->orderBy('upload_at', 'DESC')->get();

            return $news;
        }

        public function getNewsById($id){
            $news = $this->news->where('id', $id)->first();

            return $news;
        }

        public function getNewsByColumnName($column_name, $data){

            $news = $this->news->where($column_name, $data)->get();

            return $news;
        }

        public function getOpenNewsByUploadAt($date){

            $news = $this->news->where('upload_at', '<=', $date." 23:59:59")->where('upload_at', '>=', $date." 00:00:00")->where('upload_at', '<=', date('Y/m/d H:i:s'))->where('permission', true)->orderBy('id', 'DESC')->orderBy('created_at', 'DESC')->orderBy('upload_at', 'DESC')->get();

            return $news;
        }

        public function createNewNews($request){
            $newNews = new News;

            $newNews->title = $request->title;
            if($request->check_uploaddatetime){
                $newNews->upload_at = str_replace("T", " ", $request->datetime_uploadat);
            }
            $newNews->content = str_replace("\r\n",'<br/>', $request->content);
            $newNews->newskategorie_id = $request->newskategorie;

            $newNews->save();

            //Newstag
            if(!is_null($request->newstags)){
                foreach($request->newstags as $newstag){
                    if($newstag == 0){
                        $newtags = explode("#", $request->text_newtag);

                        foreach($newtags as $newtag){
                            $check_newstag = $this->newstag->getNewstagByColumnName('name', $newtag);

                            if(count($check_newstag) > 0){
                                if($this->newsnewstag->isNullNewsNewstag($newNews->id, $check_newstag[0]->id)){
                                    $newNewsNewstag = $this->newsnewstag->createNewsNewstag($newNews->id, $check_newstag[0]->id);
                                }
                            }else{
                                if($newtag != ""){
                                    $request_newtag = new Request();
                                    $request_newtag->name = $newtag;
                                    $newNewsNewstag =$this->newstag->createNewNewstag($request_newtag);

                                    $newNewsNewstag = $this->newsnewstag->createNewsNewstag($newNews->id, $newNewsNewstag->id);
                                }
                            }
                        }
                    }else{
                        $newNewsNewstag = $this->newsnewstag->createNewsNewstag($newNews->id, $newstag);
                    }
                }
            }

            //Product Img Save
            if(!is_null($request->news_imgs)){
                foreach($request->news_imgs as $key => $news_img){
                    //Database
                    $newNewsimage = new Newsimage();
                    $newNewsimage->news_id = $newNews->id;
                    $newNewsimage->save();

                    //File
                    $news_img_file = $news_img;
                    $news_img_path = $news_img->path();
                    $news_img_extension = $news_img->extension();
                    $news_img_filename = 'news_'.$newNews->id.'_'.$newNewsimage->id.'.jpg';
                    $news_img_upload_success = $news_img_file->move('img/news', $news_img_filename, $news_img_extension);
                }
            }

        }

        public function updateNews($request, $news){
            $news->title = $request->title;
            if($request->check_uploaddatetime){
                $news->upload_at = str_replace("T", " ", $request->datetime_uploadat);
            }else{
                $news->upload_at = str_replace("T", " ", date('Y/m/d H:i:s'));
            }
            $news->content = str_replace("\r\n",'<br/>', $request->content);
            $news->newskategorie_id = $request->newskategorie;

            $this->newsnewstag->clearAllNewsNewstagByNewsId($news->id);

            //Newstag
            if(!is_null($request->newstags)){
                foreach($request->newstags as $newstag){
                    if($newstag == 0){
                        $newtags = explode("#", $request->text_newtag);

                        foreach($newtags as $newtag){
                            $check_newstag = $this->newstag->getNewstagByColumnName('name', $newtag);

                            if(count($check_newstag) > 0){
                                if($this->newsnewstag->isNullNewsNewstag($news->id, $check_newstag[0]->id)){
                                    $newNewsNewstag = $this->newsnewstag->createNewsNewstag($news->id, $check_newstag[0]->id);
                                }
                            }else{
                                if($newtag != ""){
                                    $request_newtag = new Request();
                                    $request_newtag->name = $newtag;
                                    $newNewsNewstag =$this->newstag->createNewNewstag($request_newtag);

                                    $newNewsNewstag = $this->newsnewstag->createNewsNewstag($news->id, $newNewsNewstag->id);
                                }
                            }
                        }
                    }else{
                        $newNewsNewstag = $this->newsnewstag->createNewsNewstag($news->id, $newstag);
                    }
                }
            }

            //Product Img Delete
            if(!is_null($request->news_original_imgs)){
                $deleteList = $this->newsimage->where(function($query) use ($request){
                    foreach($request->news_original_imgs as $key => $news_original_img){
                        $query->where('id', '!=', $news_original_img);
                    }
                })->get();


                foreach($deleteList as $delete_img){
                    if(file_exists('img/news/news_'.$news->id.'_'.$delete_img->id.'.jpg')){
                        unlink('img/news/news_'.$news->id.'_'.$delete_img->id.'.jpg');
                    }
                }

                $this->newsimage->where(function($query) use ($request){
                    foreach($request->news_original_imgs as $key => $news_original_img){
                        $query->where('id', '!=', $news_original_img);
                    }
                })->delete();
            }


            //Product Img Save
            if(!is_null($request->news_imgs)){
                foreach($request->news_imgs as $key => $news_img){
                    //Database
                    $newNewsimage = new Newsimage();
                    $newNewsimage->news_id = $news->id;
                    $newNewsimage->save();

                    //File
                    $news_img_file = $news_img;
                    $news_img_path = $news_img->path();
                    $news_img_extension = $news_img->extension();
                    $news_img_filename = 'news_'.$news->id.'_'.$newNewsimage->id.'.jpg';
                    $news_img_upload_success = $news_img_file->move('img/news', $news_img_filename, $news_img_extension);
                }
            }

            $news->save();
        }

        public function changePermission($news){
            if($news->permission){
                $news->permission = false;
            }else{
                $news->permission = true;
            }

            $news->save();
        }

        public function deleteNews($news){
            $news->delete();
        }
    }
