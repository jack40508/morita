<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ShopTableSeeder::class);
        $this->call(ShoptypeTableSeeder::class);
        $this->call(DayoffTableSeeder::class);
        $this->call(ShopDayoffTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductkategorieTableSeeder::class);
        $this->call(ProductsizeTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(NewstagTableSeeder::class);
        $this->call(NewsNewstagTableSeeder::class);
    }
}
