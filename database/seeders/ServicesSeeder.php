<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Services;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::create([
            'name_client'=>"Prueba",
            'mobile_number_client'=>" 00-1-212-324-4152",
            'solicited_service_id'=>1,
            'comment_client'=>"House all clean",
            'date_service'=>"2022-12-12",
            'hour_service'=>"08:00",
            'status_service_id'=>1,
            'cost_service'=>100.00,
            'personal_service_id'=>1,
        ]);
    }
}
