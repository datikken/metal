<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'name' => 'datikken',
            'email' => 'tikken23@gmail.com',
            'password' => bcrypt('23tikken')
        ]);
    }
}
