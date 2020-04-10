<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoController extends Controller
{
    public function index()
    {
        $productos = producto::all();
        return view('productos.index', ['productos' => $productos]);
        /* hacemos referencia a la variable Cliente para que nos devuelva todo y los retornamos
        a la vista de usuarios */
    }
    //mostrar el formulario para crear un nuevo registro
    public function create()
    {
        return view('productos.create');
    }

    //almacena los registros recien creados de create en la base de datos
    public function store(Request $request)
    {
        $producto = new producto();

        $producto->name = request('name');
        $producto->descripcion = request('descripcion');
        $producto->image = request('image');
        $producto->precio = request('precio');
        $producto->cantidad = request('cantidad');

        $producto->save();

        return redirect('/productos');
    }
    //mostramos un registro especifico
    public function show($id)
    {
        return view('productos.show', ['producto' => producto::findOrFail($id)]);
    }
    //muestra el formulario con los datos a editar de un registro especifico
    public function edit($id)
    {
        return view('productos.edit', ['producto' => producto::findOrFail($id)]);
    }
    // actualiza un registro en la bd
    public function update(Request $request, producto $producto)
    {
       


        $producto->update($request->all());
        return redirect('/productos');
    }

    // elimina un registro en la bd
    public function destroy($id)
    {
        $producto = producto::findOrFail($id);
        $producto->delete();
        return redirect('/productos');
    }
}


