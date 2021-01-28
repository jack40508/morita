<?php
    namespace App\News;

    use Illuminate\Http\Request;
    use Auth;
    use App\News\Newskategorie;

    class NewskategorieRepository{

        public function __construct(Newskategorie $newskategorie){
            $this->newskategorie = $newskategorie;
        }

        public function getAllNewskategories(){

            $newskategories = $this->newskategorie->get();

            return $newskategories;
        }

        public function getAllNewskategoriesList(){

            $newskategories = $this->newskategorie->pluck('name', 'id');

            return $newskategories;
        }

        public function updateNewskategorie(Newskategorie $newskategorie,Request $request){

            $newskategorie->name = $request->name;
            $newskategorie->save();
        }

        public function destroyNewskategorie(Newskategorie $newskategorie){
            $newskategorie->delete();
        }
}
