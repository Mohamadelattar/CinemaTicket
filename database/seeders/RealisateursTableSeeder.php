<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RealisateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Realisateur::class, 100)->create();
    }
}
