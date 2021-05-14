<?php

namespace Database\Seeders;
use App\Models\Idioma;

use Illuminate\Database\Seeder;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Idioma::factory()->count(50)->create();

        //
    }
}
