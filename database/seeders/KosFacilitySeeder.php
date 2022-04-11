<?php

namespace Database\Seeders;

use App\Models\KosFacility;
use Illuminate\Database\Seeder;

class KosFacilitySeeder extends Seeder
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
                'name' => 'Kamar Mandi Dalam',
            ],
            [
                'name' => 'Kasur',
            ],
            [
                'name' => 'AC',
            ],
            [
                'name' => 'Meja',
            ],
            [
                'name' => 'Wifi',
            ],
            [
                'name' => 'Akses 24 Jam',
            ],
        ];

        foreach ($data as $data) {
            KosFacility::create($data);
        }
    }
}
