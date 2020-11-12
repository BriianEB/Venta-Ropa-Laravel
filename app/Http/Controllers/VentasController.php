<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Venta;

class VentasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function crear()
    {
        $productos = Producto::all();

        return view('ventas/crear', compact('productos'));
    }

    public function guardar()
    {
        $venta = request()->validate([
            'producto' => 'required',
            'cantidad' => 'required'
        ]);

        Venta::guardar($venta);

        return redirect('/');
    }

    public function reporte()
    {
        $reporteVentas = Venta::reporteVentas();

        return view('ventas/reporte', compact('reporteVentas'));
    }
}
