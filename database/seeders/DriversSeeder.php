<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drivers = [
            [
                'driver_id' => 1,
                'first_name' => 'Lewis',
                'last_name' => 'Hamilton',
                'team_id' => 1
            ],
            [
                'driver_id' => 2,
                'first_name' => 'Valteri',
                'last_name' => 'Bottas',
                'team_id' => 1
            ]
        ];
        DB::table('drivers')->insert($drivers);
    }
}
