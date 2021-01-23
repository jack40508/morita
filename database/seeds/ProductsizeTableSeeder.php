<?php

use Illuminate\Database\Seeder;
use App\Product\Productsize;

class ProductsizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Productsize::create([
            'product_id' => '1',
            'size' => 'M',
            'price' => '1400',
        ]);

        Productsize::create([
            'product_id' => '2',
            'size' => 'M',
            'price' => '1600',
        ]);

        Productsize::create([
            'product_id' => '3',
            'size' => 'M',
            'price' => '370',
        ]);

        Productsize::create([
            'product_id' => '4',
            'size' => 'M',
            'price' => '150',
        ]);

        Productsize::create([
            'product_id' => '5',
            'size' => 'M',
            'price' => '200',
        ]);

        Productsize::create([
            'product_id' => '6',
            'size' => 'M',
            'price' => '1000',
        ]);

        Productsize::create([
            'product_id' => '7',
            'size' => '4号',
            'price' => '2200',
        ]);

        Productsize::create([
            'product_id' => '7',
            'size' => '5号',
            'price' => '3000',
        ]);

        Productsize::create([
            'product_id' => '7',
            'size' => '6号',
            'price' => '3500',
        ]);

        Productsize::create([
            'product_id' => '7',
            'size' => '7号',
            'price' => '4800',
        ]);

        Productsize::create([
            'product_id' => '8',
            'size' => 'M',
            'price' => '1200',
        ]);

        Productsize::create([
            'product_id' => '9',
            'size' => 'M',
            'price' => '150',
        ]);

    }
}
