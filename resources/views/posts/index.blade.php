<x-app-layout>
    <div class="w-full bg-green-400">
        <div class="contenedor py-2">
            <h1 class="text-red-50 text-2xl font-medium">
                <i class="fab fa-blogger"></i> <span class="text-sm">{{$ContarPosts}} Articulos publicados desde {{$fechaPrimerPost}}  | Último Artículo {{$ultimoPosPublicado}} </span>
            </h1>
        </div>
    </div>
    <div class="contenedor py-8  animate__animated animate__fadeIn">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
            <article class="w-full h-80 bg-cover rounded-lg bg-center @if($loop->first)md:col-span-2 @endif" style="background-image: url(@if($post->image){{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2015/03/23/17/43/relaxation-686392_960_720.jpg   @endif)">
                
                <div class="w-full h-full px-8 flex flex-col justify-center">
                    <div>
                        @foreach ($post->tags as $tag)
                        <a class="inline-block bg-{{$tag->color}}-600 rounded-xl px-2 py-2 text-xs text-white mr-2 hvr-float-shadow hvr-icon-spin"                             
                            href="{{route('posts.tag', $tag)}}"><i class="fas fa-hashtag hvr-icon"></i>{{$tag->name}}</a>
                        @endforeach
                    </div>
                    <h1 class="text-3xl text-white font-bold mt-2 font-anton tracking-wide shake-little">
                        <a href="{{route('posts.show', $post)}}">
                            {{$post->name}}
                        </a>
                    </h1>

                </div>
            </article>
                
            @endforeach

        </div>
        <div class="mt-4">
            {{$posts->links()}}
        </div>

    </div>
</x-app-layout>