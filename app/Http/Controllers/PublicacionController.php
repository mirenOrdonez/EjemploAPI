<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Publicaciones; //que no se te olvide poner este use

    class PublicacionController extends Controller
    { public function index()
        {
            return Publicaciones::all();
        }

        public function show($id)
        {
            return Publicaciones::find($id);
        }
        public function store(Request $request)
        {
            return Publicaciones::create($request->all());
        }
        public function update(Request $request, $id)
        {
            $publicacion = Publicaciones::findOrFail($id);
            $publicacion->update($request->all());
            return $publicacion;
        }
        /* public function delete(Request $request, $id)
        {
            $publicacion = $publicacion::findOrFail($id);
            $publicacion->delete();
            return 204;
        } */
} 

