<?php

use Illuminate\Database\Seeder;
use App\News\Newskategorie;

class NewskategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Newskategorie::create([
            'name' => 'イベント',
        ]);

        Newskategorie::create([
            'name' => 'お知らせ',
        ]);

        Newskategorie::create([
            'name' => '新商品',
        ]);
    }
}
