<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (App::environment(['local'])) {
            $this->call([
                UsersTableSeeder::class,
                ItemsTableSeeder::class,
                LoansTableSeeder::class,
                RequestsTableSeeder::class,
            ]);
        }
    }
}
