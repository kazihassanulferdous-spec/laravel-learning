<?php
namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::factory(10)->create();

        Ticket::factory(100)
            ->recycle($users)
            ->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test1@example.com',
        ]);
    }
}
