<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlatKosProductsTableSeeder extends Seeder
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
                "name" => "Lemari",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Kasur",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Meja Belajar",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Kursi",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Kipas",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Cermin",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Rice Cooker",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Dispenser",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Bantal",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Guling",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Sapu",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Kain Pel",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Ember",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Keset",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Sikat Baju",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Tong Sampah",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ],
            [
                "name" => "Kemoceng",
                "category" => null,
                "stock" => null,
                "price" => null,
                "created_at" => "2022-01-02 08:43:21",
                "updated_at" => "2022-01-02 08:43:21"
            ]
        ];

        DB::table('alat_kos_products')->insert($data);
    }
}
