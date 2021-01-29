<?php
    namespace App\Shop;

    use Illuminate\Http\Request;
    use Auth;
    use App\Shop\Dayoff;

    class DayoffRepository{

        public function __construct(Dayoff $dayoff){
            $this->dayoff = $dayoff;
        }

        public function getAllDayoffs(){

            $dayoffs = $this->dayoff->get();

            return $dayoffs;
        }

        public function deleteDayoff($shop_id){

        }
    }
