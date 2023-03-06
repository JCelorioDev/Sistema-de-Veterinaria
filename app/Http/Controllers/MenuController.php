<?php

namespace App\Http\Controllers;

use App\Models\ContactoModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function view_principal(){
        return view('app');
    }

    public function view_service(){
        return view('service');
    }

    public function view_gallery(){
        return view('pet');
    }

    public function view_registro(){
        return view('contact');
    }

    public function view_tienda(){
        return view('buy');
    }

    public function save(Request $req){
        $registro = new ContactoModel();
        $registro->nombre = $req->nombre;
        $registro->apellido = $req->ape;
        $registro->numero_telefono = $req->tlf;
        $registro->email = $req->correo;
        $registro->mensaje = $req->msj;
        $registro->save();
        return redirect('Registro');
    }
}
