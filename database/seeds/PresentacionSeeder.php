<?php

use Illuminate\Database\Seeder;
use miTienda\Presentacion;

class PresentacionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Presentacion::created(['empaque' => "Lata", 'cantidad' =>'355', 'unidad' => 'ML'],
        ['empaque' => "Lata", 'cantidad' =>'450', 'unidad' => 'ML'],
        ['empaque' => "Botella", 'cantidad' =>'2', 'unidad' => 'L'],
        ['empaque' => "Botella", 'cantidad' =>'3', 'unidad' => 'L'],
        ['empaque' => "Bolsa", 'cantidad' =>'255', 'unidad' => 'GR'],
        ['empaque' => "Bolsa", 'cantidad' =>'138', 'unidad' => 'GR'],
        ['empaque' => "Botella", 'cantidad' =>'1.5', 'unidad' => 'L']);
    }
}
