<?php

use Illuminate\Database\Seeder;
use App\News\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        News::create([
            'title' => '節分キャンペーン',
            'content' => "皆さんこんにちは！<br/>そろそろ冬も過ぎ、段々暖かくなってきましたね。<br/>さて、パティスリーモリタでは節分キャンペーンをしています。<br/>ケーキをお買い上げのお客様には<br/>節分の豆まきで使える豆をプレゼントしています。<br/>どうぞ足を運んでみてくださいね。",
        ]);
    }
}
