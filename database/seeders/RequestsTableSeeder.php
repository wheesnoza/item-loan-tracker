<?php

namespace Database\Seeders;

use App\Core\Request\Enums\RequestState;
use App\Core\User\Models\User;
use Database\Factories\Request\RequestFactory;
use Database\Factories\Request\StateFactory;
use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        $stateFactory = StateFactory::new()
            ->count(2)
            ->sequence(
                ['value' => RequestState::Pending],
                ['value' => RequestState::Processing]
            );

        $users->each(fn (User $user) => RequestFactory::new()
            ->for($user)
            ->has($stateFactory)
            ->create()
        );
    }
}
