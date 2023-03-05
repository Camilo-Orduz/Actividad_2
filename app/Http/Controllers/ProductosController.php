<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index(){

        $productos = Producto::all();

        return view('productos.index', compact('productos'));
    }

    public function crear(){

        return view('productos.crear');
    }

    public function store(Request $request){
        Producto::create($request->all());
        return redirect()->route('productos');
    }


}

