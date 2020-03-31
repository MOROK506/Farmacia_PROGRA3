<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

// importamos el modelo user

class UserController extends Controller
{
    /* esta funcion  vamos a hacer uso de el modelo el cual nos retorna
    data de la bd para mostrarlos directo en el navegador*/
    //mostrar una lista de registros
    public function index()
    {
        $users = User::all();
        return view('usuarios.index', ['users' => $users]);
        /* hacemos referencia a la variable user para que nos devuelva todo y los retornamos
        a la vista de usuarios */
    }
    //mostrar el formulario para crear un nuevo registro
    public function create()
    {
        return view('usuarios.create');
    }

    //almacena los registros recien creados de create en la base de datos
    public function store(Request $request)
    {
        $usuario = new User();

        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->password = request('password');

        $usuario->save();

        return redirect('/usuarios');
    }
    //mostramos un registro especifico
    public function show($id)
    {
        return view('usuarios.show', ['user' => User::findOrFail($id)]);
    }
    //muestra el formulario con los datos a editar de un registro especifico
    public function edit($id)
    {
        return view('usuarios.edit', ['user' => User::findOrFail($id)]);
    }
    // actualiza un registro en la bd
    public function update(Request $request, User $usuario)
    {
        // $usuario =  User::findOrFail('$id');

        // $usuario->name = $request->get('name');
        // $usuario->email = $request->get('email');


        // $usuario->update();


        $usuario->update($request->all());
        return redirect('/usuarios');
    }

    // elimina un registro en la bd
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
