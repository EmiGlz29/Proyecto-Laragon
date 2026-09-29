<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('formulario');
});

Route::post('/procesar', function (Request $request) {
    
    DB::table('usuario')->insert([
        'nombre'   => $request->nombre,
        'Correo'   => $request->correo,
        'FechaNac' => $request->fecha_nacimiento,
    ]);

    $usuarios = DB::table('usuario')->get();

    return view('recibe_formulario', ['usuarios' => $usuarios]);
});
