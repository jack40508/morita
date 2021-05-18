<?php

use Illuminate\Database\Seeder;
use App\News\Newsimage;

class NewsimageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Newsimage::create([
            'news_id' => 6,
        ]);

        Newsimage::create([
            'news_id' => 6,
        ]);

        Newsimage::create([
            'news_id' => 6,
        ]);

        Newsimage::create([
            'news_id' => 7,
        ]);

        Newsimage::create([
            'news_id' => 7,
        ]);

        Newsimage::create([
            'news_id' => 7,
        ]);

        Newsimage::create([
            'news_id' => 8,
        ]);

        Newsimage::create([
            'news_id' => 8,
        ]);

        Newsimage::create([
            'news_id' => 8,
        ]);
    }
}
