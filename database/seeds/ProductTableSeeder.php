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
            'name' => 'フルーツロール',
            'productkategorie_id' => '1',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '全卵を使ったリッチな生地でフルーツを包みました。ショートケーキより崩れにくいので持ち歩きにも！',
        ]);

        Product::create([
            'name' => '赤ワインロール',
            'productkategorie_id' => '1',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'クラッシュゼリーとフルーツを巻き込んだ 爽やかなロールケーキです！冷やして美味しいロールケーキです。',
        ]);

        Product::create([
            'name' => '桃のロールケーキ',
            'productkategorie_id' => '1',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '桃を使ったロールケーキです。桃の果肉と果実を両方使って<br/>繊細な甘味や独特の食感が上品なロールケーキにしてくれます！',
        ]);

        Product::create([
            'name' => '苺とバナナロール',
            'productkategorie_id' => '1',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '苺とバナナを使ったロールケーキです。<br/>ふんわりと、かる〜いスポンジで作ったこだわりのロールケーキです。',
        ]);

        Product::create([
            'name' => '抹茶フルーツロール',
            'productkategorie_id' => '1',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '濃い抹茶の風味がたまらない！<br/>しっとりふわふわな生地とたくさんのフルーツで当店自慢の一品です。',
        ]);

        Product::create([
            'name' => '畷プレミアムプリン',
            'productkategorie_id' => '2',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '固めも柔らかめも捨てがたい…そんな思いを詰め込んだプリンです。',
        ]);

        Product::create([
            'name' => 'カスタードプリン',
            'productkategorie_id' => '2',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '昔ながらの喫茶店のようなカスタードプリンです！<br/>固すぎるのが苦手なのでもったりクリーミーと固めの間の食感です。',
        ]);

        Product::create([
            'name' => 'アーモンドプリン',
            'productkategorie_id' => '2',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'アーモンドの味と香りがほのかにする硬めのプリンです。',
        ]);

        Product::create([
            'name' => 'とろける抹茶プリン',
            'productkategorie_id' => '2',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '抹茶と豆乳、生クリームでとろける柔らかい抹茶豆乳クリームプリンです。<br/>白玉団子、ぜんざい、生クリームと一緒に頂きます。',
        ]);

        Product::create([
            'name' => 'ほうじ茶プリン',
            'productkategorie_id' => '2',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'ほうじ茶と牛乳を使用したプリンです。<br/>キビ砂糖を使った優しい甘さです。',
        ]);

        Product::create([
            'name' => 'バニラプリン',
            'productkategorie_id' => '2',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '濃厚なバニラプリンです。<br/>芳醇なバニラの香りをお楽しみ下さい。',
        ]);

        Product::create([
            'name' => 'モリタマカロン',
            'productkategorie_id' => '3',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '当店人気のマカロンです。イタリアンメレンゲの本格バタークリームに黒糖を加えたクリームを挟んでいます。',
        ]);

        Product::create([
            'name' => '柚子マカロン',
            'productkategorie_id' => '3',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '優しい柚子の香りを楽しむことができる大人のマカロンです。',
        ]);

        Product::create([
            'name' => 'ミルクマカロン',
            'productkategorie_id' => '3',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'お子様に大人気のマカロンで、ミルクの風味を楽しむ事ができます。',
        ]);

        Product::create([
            'name' => '苺マカロン',
            'productkategorie_id' => '3',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '生地にストロベリーを練りこんだマカロンです。<br/>素材に拘った一品をお楽しみください。',
        ]);

        Product::create([
            'name' => '最中マカロン',
            'productkategorie_id' => '3',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '見て楽しい、食べて美味しい最中風マカロンです。',
        ]);

        Product::create([
            'name' => 'チョコマカロン',
            'productkategorie_id' => '3',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '濃厚なチョコレートクリームが美味しい！<br/>とっても濃いチョコレートマカロン。',
        ]);

        Product::create([
            'name' => 'マカロンクッキー',
            'productkategorie_id' => '3',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '材料はナッツと砂糖と卵白だけ。カリッとナッツが香ばしい懐かしい素朴なマカロンクッキーです。',
        ]);

        Product::create([
            'name' => 'シナモンドーナツ',
            'productkategorie_id' => '4',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '出来立ては表面がさくっと中ふんわり、冷めるとふんわりもちもち食感に。<br/>時間が経っても固くならず、お土産にもピッタリ♪',
        ]);

        Product::create([
            'name' => '豆腐ドーナツ',
            'productkategorie_id' => '4',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '豆腐入りで周りはサクサク中はもちもち食感のドーナツです。<br/>手作りの味はついつい食べすぎちゃう♪',
        ]);

        Product::create([
            'name' => 'バレンタインドーナツ',
            'productkategorie_id' => '4',
            'is_sell' => true,
            'selldate' => '2021/2/7',
            'soldoutdate' => '2021/2/21',
            'description' => 'バレンタイン限定♪小さくてカワイイミニドーナツ！<br/>見て楽しい！食べて美味しい！',
        ]);

        Product::create([
            'name' => 'ココアドーナツ',
            'productkategorie_id' => '4',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'サクもちっなドーナッツです。程よいサイズ感でおやつにどうぞ♪',
        ]);

        Product::create([
            'name' => 'チョコバナナドーナツ',
            'productkategorie_id' => '4',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '美味しいベイクドドーナツ。人気のチョコバナナ味で焼きました。',
        ]);

        Product::create([
            'name' => 'アップルパイ',
            'productkategorie_id' => '5',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'りんごを煮詰める際に液体塩こうじを加えることで、甘みが引き立ち、色も鮮やかに。<br/>当店自慢の一品です。',
        ]);

        Product::create([
            'name' => 'シュガーナッツパイ',
            'productkategorie_id' => '5',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '砂糖の甘さとナッツのザクザク感をお楽しみ頂ける美味しいパイです。',
        ]);

        Product::create([
            'name' => '苺カスタードパイ',
            'productkategorie_id' => '5',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '可愛い苺のパイ！パーティーでも映えるお菓子♪<br/>ゆっくり一息お茶菓子にもぴったりです♪',
        ]);

        Product::create([
            'name' => '柿と桃のチーズパイ',
            'productkategorie_id' => '5',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '干し柿がほんのり甘くて優しいお味です！',
        ]);

        Product::create([
            'name' => '濃厚ショコラケーキ',
            'productkategorie_id' => '6',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '濃厚なチョコクリームが美味しい！おうちでカフェでリッチな時間をお届け。<br/>プレゼント用にとっても喜ばれます。',
        ]);

        Product::create([
            'name' => 'バナナパウンド',
            'productkategorie_id' => '6',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'みんな大好きバナナを使った美味しいパウンドケーキです。',
        ]);

        Product::create([
            'name' => 'レアチーズケーキ',
            'productkategorie_id' => '6',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '濃厚だけどさっぱりとした味のレアチーズケーキです。',
        ]);

        Product::create([
            'name' => 'バレンタイン苺ケーキ',
            'productkategorie_id' => '6',
            'is_sell' => true,
            'selldate' => '2021/2/7',
            'soldoutdate' => '2021/2/21',
            'description' => 'バレンタインにぴったり！<br/>切っても切ってもハートが出てくる可愛いいちごムースケーキです♪',
        ]);

        Product::create([
            'name' => 'プチガトーショコラ',
            'productkategorie_id' => '6',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '食べきりサイズのプチガトーショコラ。<br/>外側サク中しっとり濃厚です。',
        ]);

        Product::create([
            'name' => '極みバーム',
            'productkategorie_id' => '7',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'はちみつを加えた生地の、ほんのりとやさしい甘みが魅力。<br/>しっとりとした口当たりも、くせになります。',
        ]);

        Product::create([
            'name' => 'ミルクバウム',
            'productkategorie_id' => '7',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '冷めてもおいしい本格ミルクバウムクーヘン！',
        ]);

        Product::create([
            'name' => 'ラム酒バーム',
            'productkategorie_id' => '7',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'ラム酒がほのかに香る優しい甘みのバウムクーヘンです。',
        ]);

        Product::create([
            'name' => 'バナナバーム',
            'productkategorie_id' => '7',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'バナナを芯にしてモチモチ生地をくるくる～っと巻いた<br/>ミニサイズのバームクーヘンです',
        ]);

        Product::create([
            'name' => '窯出しシュー',
            'productkategorie_id' => '8',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '生クリーム＆ラム酒が入ったカスタードクリームは、コクがあるのに甘さ控えめ。 大人仕様の絶品シュークリームです♪',
        ]);

        Product::create([
            'name' => '抹茶シュー',
            'productkategorie_id' => '8',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => 'サクサクのシューになめらか抹茶クリームの美味しいシュークリーム',
        ]);

        Product::create([
            'name' => 'イチゴシュー',
            'productkategorie_id' => '8',
            'is_sell' => true,
            'soldoutdate' => '2119/12/31',
            'description' => '見た目も華やかなサクサクのシュークリーム',
        ]);

        Product::create([
            'name' => 'バレンタインシュー',
            'productkategorie_id' => '8',
            'is_sell' => true,
            'selldate' => '2021/2/7',
            'soldoutdate' => '2021/2/21',
            'description' => 'バレンタインの贈り物にピッタリなチョコシュー',
        ]);
    }
}
