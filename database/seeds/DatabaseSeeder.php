<?php

use App\Entities\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        User::create([
            'cpf' => '11111111111',
            'name' => 'João',
            'phone' => '35999999999',
            'birth' => '1980-10-01',
            'gender' => 'M',
            'email' => 'joao@sistema.com',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
