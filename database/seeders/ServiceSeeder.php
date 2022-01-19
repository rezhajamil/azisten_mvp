<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services=[
            [
                'name'=>'Pencarian Kos',
                'initial'=>'kos_searches',
            ],
            [
                'name'=>'Pemesanan Air Galon',
                'initial'=>'galon_purchases',
            ],
            [
                'name'=>'Pemesanan Catering',
                'initial'=>'catering_purchases',
            ],
            [
                'name'=>'Pemesanan Alat Kos',
                'initial'=>'alat_kos_purchases',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
