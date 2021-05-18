<?php

use Illuminate\Database\Seeder;
use App\Page\Bannerimage;

class BannerimageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Bannerimage::create([
            'id' => '1',
        ]);
        Bannerimage::create([
            'id' => '2',
        ]);
        Bannerimage::create([
            'id' => '3',
        ]);
        Bannerimage::create([
            'id' => '4',
        ]);
        Bannerimage::create([
            'id' => '5',
        ]);
    }
}
