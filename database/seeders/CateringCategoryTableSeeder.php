<?php

namespace Database\Seeders;

use App\Models\CateringCategory;
use Illuminate\Database\Seeder;

class CateringCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'name'=>'Paket Lengkap',
                'description'=>'Nasi + Sayur + Lauk',
            ],
            [
                'name'=>'Hanya Lauk',
                'description'=>'Lauk',
            ]
        ];

        CateringCategory::insert($data);
    }
}
