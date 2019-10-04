<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planers')->insert([

            ['guests_id' => '1'],
            ['guests_id' => '2'],
            ['guests_id' => '3'],
            ['guests_id' => '4'],
            ['guests_id' => '5'],
            ['guests_id' => '6'],
            ['guests_id' => '7'],
            ['guests_id' => '8'],
            ['guests_id' => '9'],
            ['guests_id' => '10']

        ]);
    }
}
