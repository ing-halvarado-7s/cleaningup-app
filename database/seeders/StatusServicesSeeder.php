<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Pendiente',
            'Atendido',
            'Cancelado'
        ];


        foreach($names as $name) {
            DB::table('status_services')->insert([
                'name_status_services'=>$name
            ]);
        }
    }
}
