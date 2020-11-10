<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Salle::class, 100)->create();
    }
}
