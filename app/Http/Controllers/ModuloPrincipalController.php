<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ModuloPrincipalController extends Controller
{
    public function index()
    {
        $modulos = DB::select('select id, categoria, estado from tbl_categoria_temas');

        return view('inicio', ['modulos'=> $modulos]);
      
    }
}
