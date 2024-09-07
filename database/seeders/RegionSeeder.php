<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region')->insert([
            [
                'nombre_region'=>'Sierra'
            ],
            [
                'nombre_region'=>'Costa'
            ],
            [
                'nombre_region'=>'Galapagos'
            ],
            [
                'nombre_region'=>'Amazonia'
            ],
        ]);
    }
}
