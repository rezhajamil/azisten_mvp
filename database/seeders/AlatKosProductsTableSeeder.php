<?php

namespace Database\Seeders;

use App\Models\AlatKosProduct;
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
            ],
            [
                "name" => "Kasur",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Meja Belajar",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Kursi",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Kipas",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Cermin",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Rice Cooker",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Dispenser",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Bantal",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Guling",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Sapu",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Kain Pel",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Ember",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Keset",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Sikat Baju",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Tong Sampah",
                "category" => null,
                "stock" => null,
                "price" => null,
            ],
            [
                "name" => "Kemoceng",
                "category" => null,
                "stock" => null,
                "price" => null,
            ]
        ];

        foreach ($data as $data ) {
            AlatKosProduct::create($data);
        }
    }
}
