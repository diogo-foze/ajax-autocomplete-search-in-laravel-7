<?php

use App\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker\Generator $faker)
    {
        DB::table('items')->truncate();
        $i = 100;
        for ($i = 0; $i < 1000; $i++) {
            Item::create([
                'name' => $faker->name
            ]);
        }
    }
}
