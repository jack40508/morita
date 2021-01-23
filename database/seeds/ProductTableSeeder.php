<?php

use Illuminate\Database\Seeder;
use App\Product\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => '濃厚ショコラロール',
            'productkategorie_id' => '1',
            'selldate' => '1920/1/1',
            'soldoutdate' => '2119/12/31',
        ]);

        Product::create([
            'name' => '限定紅芋ロール',
            'productkategorie_id' => '1',
            'selldate' => '2020/11/1',
            'soldoutdate' => '2021/2/28',
        ]);

        Product::create([
            'name' => '畷プレミアムプリン',
            'productkategorie_id' => '2',
            'selldate' => '1920/1/1',
            'soldoutdate' => '2119/12/31',
        ]);

        Product::create([
            'name' => 'MORITAマカロン',
            'productkategorie_id' => '3',
            'selldate' => '1920/1/1',
            'soldoutdate' => '2119/12/31',
        ]);

        Product::create([
            'name' => 'シナモン風味焼きドーナツ',
            'productkategorie_id' => '4',
            'selldate' => '1920/1/1',
            'soldoutdate' => '2119/12/31',
        ]);

        Product::create([
            'name' => 'アップルパイ',
            'productkategorie_id' => '5',
            'selldate' => '1920/1/1',
            'soldoutdate' => '2119/12/31',
        ]);

        Product::create([
            'name' => '濃厚ショコラケーキ',
            'productkategorie_id' => '6',
            'selldate' => '1920/1/1',
            'soldoutdate' => '2119/12/31',
        ]);

        Product::create([
            'name' => '極みバーム、ハード',
            'productkategorie_id' => '7',
            'selldate' => '1920/1/1',
            'soldoutdate' => '2119/12/31',
        ]);

        Product::create([
            'name' => '窯出しシュー',
            'productkategorie_id' => '8',
            'selldate' => '1920/1/1',
            'soldoutdate' => '2119/12/31',
        ]);
    }
}
