<?php

use Illuminate\Database\Seeder;
use App\Product\Productkategorie;

class ProductkategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Productkategorie::create([
            'name' => 'ロールケーキ',
        ]);
        Productkategorie::create([
            'name' => 'プリン',
        ]);
        Productkategorie::create([
            'name' => 'マカロン',
        ]);
        Productkategorie::create([
            'name' => 'ドーナツ',
        ]);
        Productkategorie::create([
            'name' => 'パイ',
        ]);
        Productkategorie::create([
            'name' => 'ケーキ',
        ]);
        Productkategorie::create([
            'name' => 'バームクーヘン',
        ]);
        Productkategorie::create([
            'name' => 'シュー',
        ]);
    }
}
