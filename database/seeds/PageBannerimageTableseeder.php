<?php

use Illuminate\Database\Seeder;
use App\Page\PageBannerimage;

class PageBannerimageTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PageBannerimage::create([
            'page_id' => '1',
            'bannerimage_id' => '1',
        ]);

        PageBannerimage::create([
            'page_id' => '2',
            'bannerimage_id' => '2',
        ]);

        PageBannerimage::create([
            'page_id' => '3',
            'bannerimage_id' => '3',
        ]);

        PageBannerimage::create([
            'page_id' => '4',
            'bannerimage_id' => '4',
        ]);

        PageBannerimage::create([
            'page_id' => '5',
            'bannerimage_id' => '5',
        ]);


    }
}
