<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'morita',
            'email' => 'morita@morita.com',
            'password'  =>  Hash::make('123456789'),
        ]);
    }
}
