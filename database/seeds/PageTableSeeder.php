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
            'name' => 'home',
        ]);

        Page::create([
            'name' => 'menu',
        ]);

        Page::create([
            'name' => 'news',
        ]);

        Page::create([
            'name' => 'concept',
        ]);

        Page::create([
            'name' => 'access',
        ]);
    }
}
