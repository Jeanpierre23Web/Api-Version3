<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function Productos(Request $request){
        return Producto::all();
    }

    public function ListarUno(Request $request, $idProducto){
        return Productos::findOrFail($idProducto);

    }

    public function Eliminar(Request $request, $idProducto){
        $productos = Almacen::findOrFail($idProducto);
        $productos -> delete();

        return [ "mensaje" => " Productos $idProducto eliminada."];
        
    }
    public function Insertar(Request $request){
        $stock = new stock;
        $stock -> idStock = $request -> post("idStock");
        $stock -> nombre = $request -> post("nombre");
        $stock -> apellido = $request -> post("apellido");
        $stock -> codigo_barra = $request -> post("Codigo_barra");

        $stock -> save();

        return $stock;
    }

    public function Modificar(Request $request, $idProducto){
        $stock -> idStock = $request -> post("idStock");
        $stock -> nombre = $request -> post("nombre");
        $stock -> apellido = $request -> post("apellido");
        $stock -> codigo_barra = $request -> post("Codigo_barra");
    }
}