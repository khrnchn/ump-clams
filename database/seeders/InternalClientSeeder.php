<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InternalClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\InternalClient::factory(10)->create();
    }
}
