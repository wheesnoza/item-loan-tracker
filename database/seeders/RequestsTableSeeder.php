<?php

namespace Database\Seeders;

use App\Core\Item\Models\Item;
use App\Core\User\Models\User;
use Database\Factories\Request\RequestFactory;
use Database\Factories\Request\StateFactory;
use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $items = Item::all();

        $users->each(fn (User $user) => RequestFactory::new()
            ->for($user)
            ->hasAttached($items->random(2))
            ->has(StateFactory::new()->count(2))
            ->create()
        );
    }
}
