<?php

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
        \App\User::create([
            'name' => 'nuno',
            'email' => 'c',
            'email_verified_at' => now(),
            'password' => bcrypt('123mudar'),
            'remember_token' => Str::random(10),
        ]);
        $user = factory(App\User::class, 2)->create();
    }
}
