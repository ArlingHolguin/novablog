<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostController extends Controller
{
    //
    public function index(){

        $posts = Post::where('status', 2)->latest('id')->paginate(8);
        
        $ContarPosts = Post::all()->count('id'); //cuenta la cantidad de posts
        $fechaPrimerPost = Post::all()->pluck('created_at')->first()->toFormattedDateString(); 
        $ultimoPosPublicado = Post::all()->pluck('created_at')->last()->diffForHumans(); 
        return view('posts.index', compact('posts','ContarPosts', 'fechaPrimerPost', 'ultimoPosPublicado'));
    }

    public function show(Post $post){
        $similares = Post::where('category_id', $post->category_id)
                        ->where('status', 2)
                        ->where('id', '!=', $post->id)
                        ->latest('id')
                        ->simplePaginate(4);

        return view('posts.show', compact('post', 'similares'));

    }
    public function category(Category $category){
        $posts = Post::where('category_id', $category->id)
                  ->where('status', 2) 
                  ->latest('id')
                  ->paginate(6);
                  
    
                  
    return view('posts.category', compact('posts', 'category'));

    }

    public function tag(Tag $tag,  Category  $category){
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(6);
    
        return view('posts.tag', compact('posts', 'tag', 'category'));

    }
}
