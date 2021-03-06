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
            'email' => 'alberttojrfsa@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123mudar'),
            'remember_token' => Str::random(10),
        ]);
        \App\User::create([
            'name' => 'Nacao',
            'email' => 'nacao@nacao.com.br',
            'email_verified_at' => now(),
            'password' => bcrypt('123mudar'),
            'remember_token' => Str::random(10),
        ]);
        $user = factory(App\User::class, 2)->create();
    }
}
