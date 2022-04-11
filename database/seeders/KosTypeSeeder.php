<?php

namespace Database\Seeders;

use App\Models\KosType;
use Illuminate\Database\Seeder;

class KosTypeSeeder extends Seeder
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
                'name' => 'Pria',
            ],
            [
                'name' => 'Wanita',
            ],
            [
                'name' => 'Campuran',
            ],
        ];

        foreach ($data as $data) {
            KosType::create($data);
        }
    }
}
