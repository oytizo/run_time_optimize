<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\City::factory(50)->create();
        
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'country_id' => rand(1,3),
        // ]);
    }
}
