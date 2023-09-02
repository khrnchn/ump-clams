<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\RequestService::factory(10)->create();
    }
}
