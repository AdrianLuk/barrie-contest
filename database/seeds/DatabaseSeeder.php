<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->delete();
        User::create([
            'name' => 'Adrian Luk',
            'email'      => 'aluk@email.com',
            'password'   => bcrypt('password')
        ]);
    }
}
