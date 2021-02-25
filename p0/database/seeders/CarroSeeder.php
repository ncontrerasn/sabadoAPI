<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carros')->insert([
            'modelo' => Str::random(3),
            'persona_id' => rand(1, 14),
        ]);
    }
}
