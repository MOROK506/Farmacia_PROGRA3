<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

// importamos el modelo Cliente

class ClienteController extends Controller
{
    /* esta funcion  vamos a hacer uso de el modelo el cual nos retorna
    data de la bd para mostrarlos directo en el navegador*/
    //mostrar una lista de registros
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', ['Clientes' => $clientes]);
        /* hacemos referencia a la variable Cliente para que nos devuelva todo y los retornamos
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
        $cliente = new Cliente();

        $cliente->name = request('name');
        $cliente->email = request('email');
        $cliente->password = request('password');

        $cliente->save();

        return redirect('/usuarios');
    }
    //mostramos un registro especifico
    public function show($id)
    {
        return view('clientes.show', ['cliente' => Cliente::findOrFail($id)]);
    }
    //muestra el formulario con los datos a editar de un registro especifico
    public function edit($id)
    {
        return view('clientes.edit', ['cliente' => Cliente::findOrFail($id)]);
    }
    // actualiza un registro en la bd
    public function update(Request $request, Cliente $cliente)
    {
        // $cliente =  Cliente::findOrFail('$id');

        // $cliente->name = $request->get('name');
        // $cliente->email = $request->get('email');


        // $cliente->update();


        $cliente->update($request->all());
        return redirect('/clientes');
    }

    // elimina un registro en la bd
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect('/clientes');
    }
}
