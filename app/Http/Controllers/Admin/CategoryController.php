<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:admin.categories.index')->only('index');
        $this->middleware('can:admin.categories.create')->only('create', 'store');
        $this->middleware('can:admin.categories.edit')->only('edit',  'update');
        $this->middleware('can:admin.categories.destroy')->only('destroy');
    }
    //Muestra una lista del recurso.     
    public function index()
    {
        //recupero todos los registros y los ordeno de forma descendente
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.categories.index', compact('categories'));
    }

    //Muestre el formulario para crear un nuevo recurso.     
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    // Almacene un recurso recién creado en el almacenamiento.     
    public function store(Request $request)
    {
        //regla de validacion 
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
        //envio a la bd
        $category = Category::create($request->all());

        return redirect()->route('admin.categories.index', $category)->with('info', 'La categoria se creó con éxito.');
    
    }

    // // Muestra el recurso especificado.     
    // public function show(Category $category)
    // {
    //     //
    //     return view('admin.categories.show', compact('category'));
    // }

    // Muestre el formulario para editar el recurso especificado.     
    public function edit(Category $category)
    {
        //
        return view('admin.categories.edit', compact('category'));
    }

    //Actualiza el recurso especificado en el almacenamiento.     
    public function update(Request $request, Category $category)
    {
         //regla de validacion 
         $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categories,slug,$category->id"
        ]);
        $category->update($request->all());

        return redirect()->route('admin.categories.index', $category)->with('info', 'La categoria se actualizó con éxito.');
    }

    //Elimina el recurso especificado del almacenamiento.     
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->route('admin.categories.index')->with('info', 'La categoria se eliminó con éxito.');
    }
}