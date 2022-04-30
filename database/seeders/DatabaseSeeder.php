<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            GalonCategoriesTableSeeder::class,
            AlatKosProductsTableSeeder::class,
            CateringCategoryTableSeeder::class,
            CateringDurationTableSeeder::class,
            AdminUserSeeder::class,
            ServiceSeeder::class,
            StatusSeeder::class,
            KosCategorySeeder::class,
            KosTypeSeeder::class,
            KosFacilitySeeder::class,
            CollegeSeeder::class,
            CampusSeeder::class,
        ]);
    }
}
