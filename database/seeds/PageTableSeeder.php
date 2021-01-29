<?php

use Illuminate\Database\Seeder;
use App\Page\Page;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Page::create([
            'name' => 'Home',
        ]);

        Page::create([
            'name' => 'Menu',
        ]);

        Page::create([
            'name' => 'News',
        ]);

        Page::create([
            'name' => 'Consept',
        ]);

        Page::create([
            'name' => 'Access',
        ]);
    }
}
