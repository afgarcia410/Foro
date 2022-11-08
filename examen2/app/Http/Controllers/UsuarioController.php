<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $usuario = Usuario::all();
         
            return view('usuario.index', ['activeUsuario' => 'active',
                                           'usuario' => $usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create', ['activeUsuario' => 'active',
                                        'subTitle' => 'Usuario - Create',
                                        'table' =>'usuario']);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario=new Usuario($request->all());
        $usuario->save();
            return redirect('usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuario.show', ['activeUsuario' => 'active',
                                        'usuario' => $usuario,
                                        'subTitle' => 'Usuario - Show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit', ['activeUsuario' => 'active',
                                        'usuario' => $cancion,
                                        'subTitle' => 'Usuario - Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
         $usuario->update($request->all());
            return redirect('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
            return redirect('/usuario');
    }
    protected function validateLogin(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|exists:usuario',
    ]);

    if ($validator->fails()) {
        flash('Email no existe en la base de datos')->error();
        
        // or 

        $request->session()->flash('message', 'Email Does Not Exists');
    }
}
}
