<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExternalClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ExternalClient::factory(10)->create();
    }
}
