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
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '板チョコを巻いて生地にもココア！美味しいショコラロールは、いかがですか？',
        ]);

        Product::create([
            'name' => '限定紅芋ロール',
            'productkategorie_id' => '1',
            'is_sell' => true,
            'selldate' => '2020/11/1',
            'soldoutdate' => '2021/2/28',
            'description' => '秋季限定の甘さ控えめの紅いもケーキで、大人なあなたにおすすめです！<br/>バター等の油使っておらず、低カロリーになっております。',
        ]);

        Product::create([
            'name' => '畷プレミアムプリン',
            'productkategorie_id' => '2',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '固めも柔らかめも捨てがたい…そんな思いを詰め込んだプリンです。',
        ]);

        Product::create([
            'name' => 'MORITAマカロン',
            'productkategorie_id' => '3',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '当店人気のマカロンです。イタリアンメレンゲの本格バタークリームに黒糖を加えたクリームを挟んでいます。',
        ]);

        Product::create([
            'name' => 'シナモン風味焼きドーナツ',
            'productkategorie_id' => '4',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '出来立ては表面がさくっと中ふんわり、冷めるとふんわりもちもち食感に。<br/>時間が経っても固くならず、お土産にもピッタリ♪',
        ]);

        Product::create([
            'name' => 'アップルパイ',
            'productkategorie_id' => '5',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'りんごを煮詰める際に液体塩こうじを加えることで、甘みが引き立ち、色も鮮やかに。<br/>当店自慢の一品です。',
        ]);

        Product::create([
            'name' => '濃厚ショコラケーキ',
            'productkategorie_id' => '6',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '濃厚なチョコクリームが美味しい！おうちでカフェでリッチな時間をお届け。<br/>プレゼント用にとっても喜ばれます。',
        ]);

        Product::create([
            'name' => '極みバーム、ハード',
            'productkategorie_id' => '7',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'はちみつを加えた生地の、ほんのりとやさしい甘みが魅力。<br/>しっとりとした口当たりも、くせになります。',
        ]);

        Product::create([
            'name' => '窯出しシュー',
            'productkategorie_id' => '8',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '生クリーム＆ラム酒が入ったカスタードクリームは、コクがあるのに甘さ控えめ。 大人仕様の絶品シュークリームです♪',
        ]);
    }
}
