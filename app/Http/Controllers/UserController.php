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
    return view('usuarios', ['users' => $users]);
    /* hacemos referencia a la variable user para que nos devuelva todo y los retornamos 
    a la vista de usuarios */
    }
    //mostrar el formulario para crear un nuevo registro
    public function create()
    {

    }

    //almacena los registros recien creados de create en la base de datos
     public function store()
    {
        # code...
    }
    //mostramos un registro especifico
    public function show()
    {

    }
    //muestra el formulario con los datos a editar de un registro especifico
    public function edit()
    {
        # code...
    }
    // actualiza un registro en la bd
    public function update()
    {
        # code...
    }

    // elimina un registro en la bd
    public function destroy()
    {
        # code...
    }
}
