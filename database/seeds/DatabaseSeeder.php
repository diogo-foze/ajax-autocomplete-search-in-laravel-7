<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ItemTableSeeder'); // comoser dump-autoload -> php artisan db:seed
        // $this->call(UserSeeder::class);
    }
}
