<?php

use Illuminate\Database\Seeder;

class SambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sambutans')->insert([
            'foto_sambutan' => '403',
            'isi_sambutan' => ' ',
        ]);
    }
}
