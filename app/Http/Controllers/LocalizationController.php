<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LocalizationController extends Controller
{
    public function index(Request $request,$locale){
    	//Define la localidad de la aplicacion
    	app()->setLocale($locale);

    	//Obtiene el mensaje segun la localidad y lo muestra
    	echo trans('lang.msg');
    }
}
