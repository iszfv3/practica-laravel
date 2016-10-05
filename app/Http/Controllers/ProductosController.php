<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;

class ProductosController extends Controller
{
    public function index(){
	  	$articulos = Producto::all();
	  	return view('articulo', [
	  		'articulos' => $articulos->toArray()]);
	  }

	 public function muestraId($id){
  	$articulo = Producto::find($id);
  	return view('articulo.muestra', [
  		'articulo' => $articulo
  	]);
}

	public function muestraaId($id){
	$articulo = Producto::find($id);
	echo $articulo->nombre;
	echo '<br>';
	echo $articulo->descripcion;
}
public function muestraId($id){
	$articulo = Articulo::find($id);
	$articulo->nombre_articulo = 'Este es el nuevo título';
	$articulo->save();
}
}
