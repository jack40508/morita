<?php

use Illuminate\Database\Seeder;
use App\Shop\Shop;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Shop::create([
            'name' => 'パティスリー モリタ 本店',
            'address' => '〒575-0023 大阪府四條畷市楠公1丁目12-26',
            'mail' => 'info@morita2011.com',
            'phone'  => '072-879-5734',
            'about' => '最寄り駅：JR学研都市線「四条畷」駅から徒歩約5分<br/>駐車場：1500円以上お買い上げのお客様に、タイムズの1時間無料券を発行させていただきます。',
            'opentime' => '10:00',
            'closetime' => '19:00',
            'shoptype_id' => '1',
        ]);

        Shop::create([
            'name' => 'パティスリー モリタ イオンモール四条畷店',
            'address' => '〒575-0001 大阪府四條畷市砂4丁目3-2 イオンモール四條畷1F',
            'mail' => 'info@morita2011.com',
            'phone'  => '072-803-0074',
            'about' => '2015年10月23日OPEN!',
            'opentime' => '10:00',
            'closetime' => '19:00',
            'shoptype_id' => '2',
        ]);
    }
}
