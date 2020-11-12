<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Venta extends Model
{
    protected $fillable = ['producto', 'cantidad', 'total'];

    public static function guardar($venta)
    {
        $producto = Producto::find($venta['producto']);
        $venta['total'] = $venta['cantidad'] * $producto->precio;
        self::create($venta);
    }

    public static function reporteVentas()
    {
        $ventas = DB::table('ventas')
                    ->join('productos', 'ventas.producto', '=', 'productos.id')
                    ->select('productos.nombre as producto', 'ventas.cantidad', 'ventas.total', 'productos.precio as promedio_producto')
                    ->get();

        $totalVentas = DB::table('ventas')->sum('total');

        return array(
            'ventas' => $ventas,
            'total' => $totalVentas
        );
    }

}
