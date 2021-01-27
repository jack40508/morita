<?php
    namespace App\News;

    use Illuminate\Http\Request;
    use Auth;
    use App\News\Newstag;
    use App\News\NewsNewstagRepository;

    class NewstagRepository{

        public function __construct(Newstag $newstag, NewsNewstagRepository $newsnewstag){
            $this->newstag = $newstag;
            $this->newsnewstag = $newsnewstag;
        }

        public function getAllNewstags(){

            $newstags = $this->newstag->get();

            return $newstags;
        }

        public function getNewestNewstag(){

            $newstag = $this->newstag->orderBy('updated_at', 'DESC')->orderBy('id', 'DESC')->first();

            return $newstag;
        }

        public function getNewstagByColumnName($column_name, $request){

            $newstags = $this->newstag->where($column_name, $request)->get();

            return $newstags;
        }

        public function createNewNewstag($request){

            $newNewstag = new Newstag;

            $newNewstag->name = $request->name;
            $newNewstag->save();

            return $newNewstag;
        }

        public function createNewNewstagByName($name){

            $newNewstag = new Newstag;

            $newNewstag->name = $name;
            $newNewstag->save();
        }

        public function updateNewstag($request, $newstag){

            $newstag->name = $request->name;
            $newstag->save();
        }

        public function deleteNewstag($newstag){

            $this->newsnewstag->clearAllNewsNewstagByNewstagId($newstag->id);
            $newstag->delete();
        }
}
