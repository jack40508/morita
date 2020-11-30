<?php

use Illuminate\Database\Seeder;
use App\Shop\Shoptype;

class ShoptypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Shoptype::create([
            'name' => '本店',
        ]);

        Shoptype::create([
            'name' => '支店',
        ]);
    }
}
