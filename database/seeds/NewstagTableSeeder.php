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
    }
}
