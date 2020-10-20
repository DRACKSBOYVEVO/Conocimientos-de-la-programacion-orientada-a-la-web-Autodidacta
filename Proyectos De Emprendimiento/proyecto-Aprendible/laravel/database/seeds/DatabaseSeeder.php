<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	// cuando yo ejecute el comando en el seeder, el ba a buscar en esta lista, y esta lista esta haciendo referencia a este archivo en naranjado ProductsTableSeeder
        $this->call(ProductsTableSeeder::class);//lista
    }
}
