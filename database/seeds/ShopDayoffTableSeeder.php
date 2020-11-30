<?php

use Illuminate\Database\Seeder;
use App\Shop\ShopDayoff;

class ShopDayoffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ShopDayoff::create([
            'shop_id' => '1',
            'dayoff_id' => '3',
        ]);
    }
}
