<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status=[
            [
                'name'=>'Pending',
            ],
            [
                'name'=>'On Progress',
            ],
            [
                'name'=>'Finished',
            ],
            [
                'name'=>'Waiting for Payment',
            ],
            [
                'name'=>'Canceled',
            ],
        ];

        foreach ($status as $status) {
            Status::create($status);
        }
    }
}
