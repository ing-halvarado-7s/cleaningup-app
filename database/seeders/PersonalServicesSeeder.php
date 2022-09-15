<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Not assigned',
            'Jennireef Paiva',
            'Jorge Paiva'
        ];


        foreach($names as $name) {
            DB::table('personal_services')->insert([
                'name_personal_services'=>$name
            ]);
        }
    }
}
