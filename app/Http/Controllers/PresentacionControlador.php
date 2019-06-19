<?php

namespace miTienda\Http\Controllers;

use Illuminate\Http\Request;
use miTienda\Http\Controllers\Controller;
use miTienda\Presentacion;

class PresentacionControlador extends Controller
{
    public function index()
    {
        $presentacion = Presentacion::get();
        echo json_encode($presentacion);
    }

    public function store(Request $request)
    {
        $presentacion = new Presentacion();
        $presentacion->empaque = $request->input('empaque');
        $presentacion->cantidad = $request->input('cantidad');
        $presentacion->unidad = $request->input('unidad');
        $presentacion->save();
        echo json_encode($presentacion);
    }

    public function update(Request $request, $presentacion_id)
    {
        $presentacion = Presentacion::find($presentacion_id);
        $presentacion->empaque = $request->input('empaque');
        $presentacion->cantidad = $request->input('cantidad');
        $presentacion->unidad = $request->input('unidad');
        $presentacion->save();
        echo json_encode($presentacion);
    }

    public function destroy($presentacion_id)
    {
        $presentacion = Presentacion::find($presentacion_id);
        $presentacion->delete();
    }
}
