<?php

use Illuminate\Database\Seeder;
use miTienda\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Producto::created(['nombre' => "Coca cola"],
            ['nombre' => "Pepsi"],
            ['nombre' => "Ruffles"],
            ['nombre' => "Volt"],
            ['nombre' => "Emperador"],
            ['nombre' => "Fresca"],
            ['nombre' => "Fanta"],
            ['nombre' => "Vive 100"],
            ['nombre' => "Churrimais"],
            ['nombre' => "Doritos"]);
    }
}
