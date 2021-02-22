<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.tags.index')->only('index');
        $this->middleware('can:admin.tags.create')->only('create', 'store');
        $this->middleware('can:admin.tags.edit')->only('edit',  'update');
        $this->middleware('can:admin.tags.destroy')->only('destroy');
    }
    //Muestra una lista del recurso.     
    public function index()
    {
        //recupera todo el listado de tags
        // $tags = Tag::all()->orderByDesc('id');
        $tags = Tag::orderBy('id', 'DESC')->get();
                
        
        return view('admin.tags.index', compact('tags'));
    }

    //Muestre el formulario para crear un nuevo recurso.   
    public function create()
    {
        //array de colores de las etiquetas
        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color índigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado'

        ];  

        return view('admin.tags.create', compact('colors'));
    }

     // Almacene un recurso recién creado en el almacenamiento.   
    public function store(Request $request)
    {
        //reglas de validacion
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'color' => 'required',
        ]);
       $tag = Tag::create($request->all());

        return redirect()->route('admin.tags.index', $tag)->with('info', 'La etiqueta se creó con éxito.');
    }

    // Muestra el recurso especificado.    
    // public function show(Tag $tag)
    // {
    //     //
    //     return view('admin.tags.index', compact('tag'));
    // }

    // Muestre el formulario para editar el recurso especificado.   
    public function edit(Tag $tag)
    {
         //array de colores de las etiquetas
         $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color índigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado'

        ]; 

        return view('admin.tags.edit', compact('tag', 'colors'));
    }

    //Actualiza el recurso especificado en el almacenamiento.   
    public function update(Request $request, Tag $tag)
    {
        //reglas de validacion
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tags,slug,$tag->id",
            'color' => 'required',
        ]);

        $tag->update($request->all());
        return redirect()->route('admin.tags.index', $tag)->with('info', 'La etiqueta se actualizó con éxito.');

    }

     //Elimina el recurso especificado del almacenamiento.     
    public function destroy(Tag $tag)
    {
        //
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('info', 'La etiqueta se eliminó con éxito.');
    }
}
