<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
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
                'name' => 'Universitas Sumatera Utara',
                'address' => 'Medan'
            ],
            [
                'name' => 'Politeknik Negeri Medan',
                'address' => 'Medan'
            ],
        ];

        foreach ($data as $data) {
            College::create($data);
        }
    }
}
