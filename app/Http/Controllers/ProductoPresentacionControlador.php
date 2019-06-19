<?php

namespace miTienda\Http\Controllers;

use Illuminate\Http\Request;
use miTienda\ProductoPresentacion;
use Illuminate\Support\Facades\Response;

class ProductoPresentacionControlador extends Controller
{
    public function index()
    {
        $productoPresentacion = ProductoPresentacion::get();
        echo json_encode($productoPresentacion);
    }

    public function store(Request $request)
    {
        $productoPresentacion = new ProductoPresentacion();
        $productoPresentacion->nombre = $request->input('nombre');
        $productoPresentacion->save();
        echo json_encode($productoPresentacion);
    }

    public function update(Request $request, $productoPresentacion_id)
    {
        $productoPresentacion = ProductoPresentacion::find($productoPresentacion_id);
        $productoPresentacion->nombre = $request->input('nombre');
        $productoPresentacion->save();
        echo json_encode($productoPresentacion);
    }

    public function destroy($productoPresentacion_id)
    {
        $productoPresentacion = ProductoPresentacion::find($productoPresentacion_id);
        $productoPresentacion->delete();
    }
}
