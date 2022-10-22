<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Shop::factory(500)->create();

        //  for($i=0;$i<200;$i++){
        //     DB::table('shops')->insert([
        //         'name' => Str::random(10),
        //         '_id' => rand(1,50),
        //     ]);
        //  }
    }
}
