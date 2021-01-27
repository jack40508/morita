<?php
    namespace App\News;

    use Illuminate\Http\Request;
    use Auth;
    use App\News\NewsNewstag;

    class NewsNewstagRepository{

        public function __construct(NewsNewstag $newsnewstag){
            $this->newsnewstag = $newsnewstag;
        }

        public function getAllNewstags(){

            $newsnewstags = $this->newsnewstag->get();

            return $newsnewstags;
        }

        public function createNewsNewstag($news_id, $newstag_id){
            $newNewsNewstag = new NewsNewstag;
            $newNewsNewstag->news_id = $news_id;
            $newNewsNewstag->newstag_id = $newstag_id;
            $newNewsNewstag->save();
        }

        public function isNullNewsNewstag($news_id, $newstag_id){
            if($this->newsnewstag->where('news_id', $news_id)->where('newstag_id', $newstag_id)->count()){
                return false;
            }else{
                return true;
            }
        }
}
