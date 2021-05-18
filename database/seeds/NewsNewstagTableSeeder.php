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

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 1,
        ]);

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 7,
        ]);

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 8,
        ]);

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 9,
        ]);

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 10,
        ]);

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 11,
        ]);

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 12,
        ]);

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 13,
        ]);

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 14,
        ]);

        NewsNewstag::create([
            'news_id' => 6,
            'newstag_id' => 5,
        ]);

        NewsNewstag::create([
            'news_id' => 7,
            'newstag_id' => 15,
        ]);

        NewsNewstag::create([
            'news_id' => 7,
            'newstag_id' => 16,
        ]);

        NewsNewstag::create([
            'news_id' => 7,
            'newstag_id' => 16,
        ]);

        NewsNewstag::create([
            'news_id' => 7,
            'newstag_id' => 17,
        ]);

        NewsNewstag::create([
            'news_id' => 7,
            'newstag_id' => 14,
        ]);

        NewsNewstag::create([
            'news_id' => 7,
            'newstag_id' => 5,
        ]);

        NewsNewstag::create([
            'news_id' => 8,
            'newstag_id' => 3,
        ]);

        NewsNewstag::create([
            'news_id' => 8,
            'newstag_id' => 8,
        ]);

        NewsNewstag::create([
            'news_id' => 8,
            'newstag_id' => 18,
        ]);

        NewsNewstag::create([
            'news_id' => 8,
            'newstag_id' => 5,
        ]);

        NewsNewstag::create([
            'news_id' => 8,
            'newstag_id' => 19,
        ]);

        NewsNewstag::create([
            'news_id' => 8,
            'newstag_id' => 14,
        ]);

        NewsNewstag::create([
            'news_id' => 8,
            'newstag_id' => 20,
        ]);
    }
}
