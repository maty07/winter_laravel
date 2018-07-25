<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('genres')->insert([
            'name' => 'Accion'
        ]);
       DB::table('genres')->insert([
            'name' => 'Animacion'
        ]);
       DB::table('genres')->insert([
            'name' => 'Aventura'
        ]);
       DB::table('genres')->insert([
            'name' => 'Drama'
        ]);
       DB::table('genres')->insert([
            'name' => 'Fantasia'
        ]);
       DB::table('genres')->insert([
            'name' => 'Ciencia y Ficcion'
        ]);
       DB::table('genres')->insert([
            'name' => 'Romantica'
        ]);
       DB::table('genres')->insert([
            'name' => 'Terror'
        ]);
       DB::table('genres')->insert([
            'name' => 'Suspenso'
        ]);
       DB::table('genres')->insert([
            'name' => 'Infantil'
        ]);
    }
}
