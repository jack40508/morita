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

        public function getNewestNews(){
            $news = $this->news->orderBy('updated_at', 'DESC')->first();

            return $news;
        }

        public function createNewNews($request){
            $newNews = new News;

            $newNews->title = $request->title;
            if($request->check_uploaddatetime){
                $newNews->upload_at = str_replace("T", " ", $request->datetime_uploadat);
            }
            $newNews->content = str_replace("\r\n",'<br/>', $request->content);

            $newNews->save();

            $newestNews = $this->getNewestNews();
            
            if(!is_null($request->newstags)){
                foreach($request->newstags as $newstag){
                    if($newstag == 0){
                        $newtags = explode("#", $request->text_newtag);
    
                        foreach($newtags as $newtag){
                            $check_newstag = $this->newstag->getNewstagByColumnName('name', $newtag);
                            
                            if(count($check_newstag) > 0){
                                if($this->newsnewstag->isNullNewsNewstag($newestNews->id, $check_newstag[0]->id)){
                                    $newNewsNewstag = $this->newsnewstag->createNewsNewstag($newestNews->id, $check_newstag[0]->id);
                                }                            
                            }else{
                                if($newtag != ""){
                                    $request_newtag = new Request();
                                    $request_newtag->name = $newtag;
                                    $this->newstag->createNewNewstag($request_newtag);
    
                                    $newestNewstag = $this->newstag->getNewestNewstag();
    
                                    $newNewsNewstag = $this->newsnewstag->createNewsNewstag($newestNews->id, $newestNewstag->id);
                                }                            
                            }
                        }
                    }else{
                        $newNewsNewstag = $this->newsnewstag->createNewsNewstag($newestNews->id, $newstag);
                    }
                }
            }

            //Product Img Save
            if(!is_null($request->news_imgs)){
                foreach($request->news_imgs as $key => $news_img){
                    //Database
                    $newNewsimage = new Newsimage();
                    $newNewsimage->news_id = $newestNews->id;
                    $newNewsimage->save();
                    
                    //File
                    $news_img_file = $news_img;
                    $news_img_path = $news_img->path();
                    $news_img_extension = $news_img->extension();
                    $news_img_filename = 'news_'.$newestNews->id.'_'.($key+1).'.jpg';
                    $news_img_upload_success = $news_img_file->move('img/news', $news_img_filename, $news_img_extension);
                }                
            }
            
        }

        public function updateNews($request, $news){
            $news->name = $request->name;
            $news->save();
        }

        public function deleteNews($news){
            $news->delete();
        }
}
