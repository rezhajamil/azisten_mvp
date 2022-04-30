<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Kampus Universitas Sumatera Utara',
                'slug' => 'universitas-sumatera-utara',
                'college_id' => 1,
                'address' => 'Jalan Dr. T. Mansur No.9',
                'province' => 'SUMATERA UTARA',
                'city' => 'KOTA MEDAN',
                'district' => 'MEDAN SELAYANG',
                'latitude' => '3.56463387',
                'longitude' => '98.65368108',
            ],
            [
                'name' => 'Kampus Politeknik Negeri Medan',
                'slug' => 'politeknik-negeri-medan',
                'college_id' => 2,
                'address' => 'Jalan Dr. T. Mansur No.9',
                'province' => 'SUMATERA UTARA',
                'city' => 'KOTA MEDAN',
                'district' => 'MEDAN SELAYANG',
                'latitude' => '3.56463387',
                'longitude' => '98.65368108',
            ],
        ];

        foreach ($data as $data) {
            Campus::create($data);
        }
    }
}
