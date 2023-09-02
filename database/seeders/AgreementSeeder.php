<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgreementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Agreement::factory(10)->create();
    }
}
