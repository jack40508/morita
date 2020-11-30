<?php

use Illuminate\Database\Seeder;
use App\Shop\Dayoff;

class DayoffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Dayoff::create([
            'name' => '月曜日',
        ]);
        Dayoff::create([
            'name' => '火曜日',
        ]);
        Dayoff::create([
            'name' => '水曜日',
        ]);
        Dayoff::create([
            'name' => '木曜日',
        ]);
        Dayoff::create([
            'name' => '金曜日',
        ]);
        Dayoff::create([
            'name' => '土曜日',
        ]);
        Dayoff::create([
            'name' => '日曜日',
        ]);
    }
}
