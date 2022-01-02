<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GalonCategory;
use Illuminate\Support\Facades\DB;

class GalonCategoriesTableSeeder extends Seeder
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
                "name" => "Isi Ulang",
                "price" => null,
                "description" => "",
            ],
            [
                "name" => "Aqua Asli",
                "price" => null,
                "description" => "",
            ],
        ];

        DB::table('galon_categories')->insert($data);
    }
}
