<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    // Handle the Post "created" event.     
    public function creating(Post $post)
    {
        //
        if(! \App::runningInConsole()){
            $post->user_id = auth()->user()->id;
        }
    }

    
    // Handle the Post "deleted" event.     
    public function deleted(Post $post)
    {
        //
        if($post->imge){
            Storage::deleting($post->image->url);

        }
    }

    
}
