<?php

use Illuminate\Database\Seeder;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('struktur_organisasis')->insert([
            'struktur' => '-',
        ]);
    }
}
