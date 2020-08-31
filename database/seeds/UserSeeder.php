<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'adminatm',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminatm789'),
            'tipe' => '1',
        ]);
    }
}
