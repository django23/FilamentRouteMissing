<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'id' => '01H9QXKG1DBKSFP07CMY5FEKB8',
            'name' => 'First Last',
            'email' => 'user@example.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
