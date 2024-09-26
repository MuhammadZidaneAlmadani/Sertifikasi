<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {
    public function run(): void {
        User::create([
            'name' => 'Zidane',
            'email' => 'Zidane@gmail.com',
            'password' => Hash::make('12345'), // Hash the password
        ]);
    }
}
