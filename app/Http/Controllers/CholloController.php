<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class CholloController extends Controller
{
    public function index()
    {
        // Obtener todos los chollos de la base de datos
        $chollos = Chollo::all();

        // Devolver la vista index y pasar los chollos como datos
        return view('chollo.index', ['chollos' => $chollos]);
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'url' => 'required|url',
            'categoria' => 'required|string|max:255',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required|boolean',
        ]);

        // Crear una nueva instancia del modelo Chollo con los datos del formulario
        $chollo = new Chollo();
        $chollo->titulo = $request->titulo;
        $chollo->descripcion = $request->descripcion;
        $chollo->url = $request->url;
        $chollo->categoria = $request->categoria;
        $chollo->puntuacion = $request->puntuacion;
        $chollo->precio = $request->precio;
        $chollo->precio_descuento = $request->precio_descuento;
        $chollo->disponible = $request->disponible;

        // Guardar el nuevo chollo en la base de datos
        $chollo->save();

        // Redireccionar a la pagina principal con un mensaje
        return redirect()->route('chollos.index')->with('mensaje', 'Chollo creado exitosamente.');
    }

    public function create()
    {
        // Retorna la vista para crear un nuevo chollo
        return view('chollo.create');
    }

    public function edit($id)
    {
        // Buscar el chollo por su ID
        $chollo = Chollo::findOrFail($id);

        // Retornar la vista de edicion con los datos del chollo
        return view('chollo.edit', compact('chollo'));
    }

    public function show($id)
    {
        // Buscar el chollo por su ID
        $chollo = Chollo::findOrFail($id);

        // Retornar la vista de detalle del chollo con los datos del chollo
        return view('chollo.show', compact('chollo'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'url' => 'required|url',
            'categoria' => 'required|string|max:255',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required|boolean',
        ]);

        // Buscar el chollo por su ID
        $chollo = Chollo::findOrFail($id);

        // Actualizar los campos del chollo con los nuevos datos del formulario
        $chollo->titulo = $request->titulo;
        $chollo->descripcion = $request->descripcion;
        $chollo->url = $request->url;
        $chollo->categoria = $request->categoria;
        $chollo->puntuacion = $request->puntuacion;
        $chollo->precio = $request->precio;
        $chollo->precio_descuento = $request->precio_descuento;
        $chollo->disponible = $request->disponible;

        // Guardar el chollo actualizado en la base de datos
        $chollo->save();

        // Redirigir al usuario a la vista de detalles del chollo actualizado
        return redirect()->route('chollos.show', $chollo->id);
    }

    public function destroy($id)
    {
        // Buscar el chollo por su ID
        $chollo = Chollo::findOrFail($id);

        // Eliminar el chollo de la base de datos
        $chollo->delete();

        // Redirigir al usuario a la pagina principal con un mensaje
        return redirect()->route('chollos.index')->with('mensaje', 'Chollo eliminado exitosamente.');
    }
}
