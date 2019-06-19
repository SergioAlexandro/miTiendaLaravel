<?php

namespace miTienda\Http\Controllers;

use Illuminate\Http\Request;
use miTienda\Http\Controllers\Controller;
use miTienda\Producto;

class ProductoControlador extends Controller
{
    public function index()
    {
        $producto = Producto::get();
        echo json_encode($producto);
    }

    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->save();
        echo json_encode($producto);
    }

    public function update(Request $request, $producto_id)
    {
        $producto = Producto::find($producto_id);
        $producto->nombre = $request->input('nombre');
        $producto->save();
        echo json_encode($producto);
    }

    public function destroy($producto_id)
    {
        $producto = Producto::find($producto_id);
        $producto->delete();
    }
}
