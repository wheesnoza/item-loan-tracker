<?php

namespace Database\Seeders;

use App\Core\Item\Models\Stock;
use App\Core\User\Models\User;
use Database\Factories\Item\LoanFactory;
use Illuminate\Database\Seeder;

class LoansTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $stocks = Stock::query()->inRandomOrder()->limit(2)->get();

        $users->crossJoin($stocks)->each(fn ($crossed) => LoanFactory::new()->for($crossed[0])->for($crossed[1])->create()
        );
    }
}
