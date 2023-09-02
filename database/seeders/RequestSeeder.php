<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Request::factory(10)->create();
    }
}
