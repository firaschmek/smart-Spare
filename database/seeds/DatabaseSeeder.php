<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
           $this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
       DB::table('users')->delete();

        User::create(array('name' => 'admin','email' => 'aa@aa.fr', 'password' => Hash::make('admin123')));
    }
}