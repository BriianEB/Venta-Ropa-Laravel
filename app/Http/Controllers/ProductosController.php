<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function crear()
    {
        return view('productos/crear');
    }

    public function guardar()
    {
        $producto = request()->validate([
            'nombre' => 'required',
            'precio' => 'required'
        ]);

        Producto::create($producto);

        return redirect('/');
    }
}
