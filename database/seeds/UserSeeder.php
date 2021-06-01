<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'username' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
