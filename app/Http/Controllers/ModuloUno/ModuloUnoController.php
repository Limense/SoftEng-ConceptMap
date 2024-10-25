<?php

namespace App\Http\Controllers\ModuloUno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ModuloUnoController extends Controller
{
    public function index(){ 
             
        $temas = DB::select('select id, id_cat, titulo from tbl_temas where estado = 1 order by id asc');
        return view('modulo-1.index', ['temas'=> $temas]);
    }
}
