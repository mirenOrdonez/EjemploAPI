<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuarios;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuarios::all();
    }

    public function show($id)
    {
        return Usuarios::find($id);
    }
    public function store(Request $request)
    {
        return Usuarios::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario->update($request->all());
        return $usuario;
    }
   /*  public function delete(Request $request, $id)
    {
        $usuario = $usuario::findOrFail($id);
        $usuario->delete();
        return 204;
    } */
} 
