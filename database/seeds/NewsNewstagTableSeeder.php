<?php

use Illuminate\Database\Seeder;
use App\News\NewsNewstag;

class NewsNewstagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        NewsNewstag::create([
            'news_id' => 1,
            'newstag_id' => 1,
        ]);

        NewsNewstag::create([
            'news_id' => 1,
            'newstag_id' => 2,
        ]);

        NewsNewstag::create([
            'news_id' => 1,
            'newstag_id' => 3,
        ]);

        NewsNewstag::create([
            'news_id' => 1,
            'newstag_id' => 4,
        ]);

        NewsNewstag::create([
            'news_id' => 1,
            'newstag_id' => 5,
        ]);

        NewsNewstag::create([
            'news_id' => 1,
            'newstag_id' => 6,
        ]);
    }
}
