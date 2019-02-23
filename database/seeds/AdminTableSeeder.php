<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'yanuarkurnianto1@gmail.com',
            'username' => 'kurnianto43',
            'password' => bcrypt('secret'),
        ]);

        $user->assignRole('admin');
    }
}
