<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolicitedServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'House cleaning',
            'Apartment cleaning',
            'Office cleaning'
        ];


        foreach($names as $name) {
            DB::table('solicited_services')->insert([
                'name_solicited_services'=>$name
            ]);
        }
    }
}
