<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
use Session;

class persona extends Controller
{   /*
    public function prueba($id){
    	//aqui se pone todo el codigo
    	$msg="hola";
    	$suma=$id+50;
    	return view('pruebas', compact('id','msg','suma'));
    }
   */
  public function ingresar(Request $request){

Session::push('user.nombre', $request->nombre);
Session::push('user.apellido', $request->apellido);
Session::push('user.cedula', $request->cedula);
return view('ingreso');

  }

  public function mostrar(Request $request){
  	return view('home');
  }
   public function eliminar(){
    Session::flush();
  	return view('home');
  }

}
