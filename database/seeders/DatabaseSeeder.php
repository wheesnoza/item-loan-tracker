<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            ItemsTableSeeder::class,
            LoansTableSeeder::class,
            RequestsTableSeeder::class,
        ]);
    }
}
