<?php

use Illuminate\Database\Seeder;
use miTienda\Producto;
use miTienda\Presentacion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Producto::truncate();
        Presentacion::truncate();

        $this->call('ProductoSeeder');
        $this->call('PresentacionSeeder');
    }
}
