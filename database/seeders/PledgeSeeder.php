<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Pledge::factory(10)->create();
    }
}
