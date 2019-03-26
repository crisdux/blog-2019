<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(){
        $this->call([
         PostSeeder::class,
         CategorySeeder::class,
         TagSeeder::class,
         PostTagSeeder::class
        ]);
      }
}
