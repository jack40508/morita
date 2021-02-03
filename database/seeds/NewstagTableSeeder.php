<?php

use Illuminate\Database\Seeder;
use App\News\Newstag;

class NewstagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Newstag::create([
            'name' => 'ケーキ',
        ]);

        Newstag::create([
            'name' => 'プレゼント',
        ]);

        Newstag::create([
            'name' => '期間限定',
        ]);

        Newstag::create([
            'name' => 'キャンペーン',
        ]);

        Newstag::create([
            'name' => 'ブログ',
        ]);

        Newstag::create([
            'name' => '節分',
        ]);

        Newstag::create([
            'name' => '新商品',
        ]);

        Newstag::create([
            'name' => 'イチゴ',
        ]);

        Newstag::create([
            'name' => 'ヨーグルト',
        ]);

        Newstag::create([
            'name' => 'フルーツサンド',
        ]);

        Newstag::create([
            'name' => 'スカイベリー',
        ]);

        Newstag::create([
            'name' => 'はちみつ',
        ]);

        Newstag::create([
            'name' => '店長渾身',
        ]);

        Newstag::create([
            'name' => ' 当店オススメ',
        ]);

        Newstag::create([
            'name' => 'チーズケーキ',
        ]);

        Newstag::create([
            'name' => '濃厚',
        ]);

        Newstag::create([
            'name' => 'バークチーズケーキ',
        ]);

        Newstag::create([
            'name' => 'タルト',
        ]);

        Newstag::create([
            'name' => 'サクサク',
        ]);

        Newstag::create([
            'name' => '旬のフルーツ',
        ]);
    }
}
