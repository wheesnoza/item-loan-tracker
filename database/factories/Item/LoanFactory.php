<?php

namespace Database\Factories\Item;

use App\Core\Item\Models\Loan;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    protected $model = Loan::class;

    public function definition(): array
    {
        return [
            'user_id' => UserFactory::new(),
            'stock_id' => StockFactory::new()->for(ItemFactory::new()),
        ];
    }
}
