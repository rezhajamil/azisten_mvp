<?php

namespace Database\Seeders;

use App\Models\KosCategory;
use Illuminate\Database\Seeder;

class KosCategorySeeder extends Seeder
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
                'name' => 'Reguler',
            ],
            [
                'name' => 'Recommended',
            ],
        ];

        foreach ($data as $data) {
            KosCategory::create($data);
        }
    }
}
