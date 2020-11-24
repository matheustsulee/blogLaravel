<?php

use Illuminate\Database\Seeder;

class CapasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Capa::create([
            'path_home' => 'capas/home/capa_home.jpeg',
            'path_interna'=> 'capas/interna/capa_interna.jpeg'
        ]);
    }
}
