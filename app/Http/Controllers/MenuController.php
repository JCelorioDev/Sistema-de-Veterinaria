<?php

namespace App\Http\Controllers;

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
}
