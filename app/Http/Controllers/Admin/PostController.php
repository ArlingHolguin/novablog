<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{



    public function __construct()
    {
        $this->middleware('can:admin.posts.index')->only('index');
        $this->middleware('can:admin.posts.create')->only('create', 'store');
        $this->middleware('can:admin.posts.edit')->only('edit',  'update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');
    }
    //Muestra una lista del recurso.   
    public function index()
    {
        //
        return view('admin.posts.index');
    }

    //Muestre el formulario para crear un nuevo recurso.  
    public function create()
    {
        //
        $categories= Category::pluck('name', 'id'); 
        $tags = Tag::all();

        // return $categories;
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    // Almacene un recurso recién creado en el almacenamiento.   
    public function store(StorePostRequest $request)
    {
        //
        // return Storage::put('posts', $request->file('file'));
        // return $request->file('file');
        // $post = Post::create($request->all());
        // if($request->tags){
        //     $post->tags()->sync($request->tags);

        // }
        // return redirect()->route('admin.posts.edit', $post);

        $post = Post::create($request->all());
        
        if ($request->file('file')) {
            $url = Storage::put('posts', $request->file('file'));
            $post->image()->create([
                'url' => $url
            ]);
        }
        

        if($request->tags){
            $post->tags()->sync($request->tags);

        }
        return redirect()->route('admin.posts.index', $post)->with('info', 'El post se creó con éxito.');
        
    }

    // Muestra el recurso especificado.
    // public function show(Post $post)
    // {
    //     //
        

    //     return view('admin.posts.show', compact('post'));
    // }

    // Muestre el formulario para editar el recurso especificado. 
    public function edit(Post $post)
    {
        //
        $categories= Category::pluck('name', 'id'); 
        $tags = Tag::all();

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    //Actualiza el recurso especificado en el almacenamiento. 
    public function update(StorePostRequest $request, Post $post)
    {
        //
        $post->update($request->all());
        if($request->file('file')){
            $url = Storage::put('posts',$request->file('file'));
            if($post->image){
                Storage::delete($post->image->url);
                $post->image->update([
                    'url' => $url
                ]);

            }else{
                $post->image()->create([
                    'url' => $url
                ]);
            }
        }
        if($request->tags){
            $post->tags()->sync($request->tags);

        }
        return redirect()->route('admin.posts.edit', $post)->with('info', 'El post se actualizó con éxito.');
    }

     //Elimina el recurso especificado del almacenamiento.
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->route('admin.posts.index')->with('info', 'El post se eliminó con éxito.');
    }
}
