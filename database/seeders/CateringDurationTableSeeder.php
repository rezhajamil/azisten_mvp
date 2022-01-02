<?php

namespace Database\Seeders;

use App\Models\CateringDuration;
use Illuminate\Database\Seeder;

class CateringDurationTableSeeder extends Seeder
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
                'name' => '1 Bulan',
                'amount' => 60,
            ],
            [
                'name' => '3 Bulan',
                'amount' => 180,
            ],
            [
                'name' => '1 Tahun',
                'amount' => 720,
            ],
        ];

        CateringDuration::insert($data);
    }
}
