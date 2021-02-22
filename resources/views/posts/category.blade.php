<x-app-layout>
    <div class="w-full bg-green-400">
        <div class="contenedor py-2">
            <h1 class="text-red-50 text-2xl uppercase font-bold">
              <i class="fas fa-bookmark"></i> {{$category->name}}
            </h1>
        </div>
    </div>
    <div class="contenedor mx-auto mt-10 mb-10 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($posts as $post )
        
        <div>
          <div class="rounded-lg overflow-hidden">
            <div class="relative overflow-hidden pb-60">
              @if ($post->image)
              <img class="absolute h-full w-full object-cover object-center "
                src="{{Storage::url($post->image->url)}}"
                alt="{{$post->name}}"/>
                  
              @else
              <img class="absolute h-full w-full object-cover object-center "
                src="https://cdn.pixabay.com/photo/2015/03/23/17/43/relaxation-686392_960_720.jpg"
                alt="{{$post->name}}"/>
                  
              @endif    
                <div class="relative m-3">
                @foreach ($post->tags as $tag)
                  <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-{{$tag->color}}-600 rounded-xl px-2 py-2 text-xs text-white mr-2 hvr-float-shadow hvr-icon-spin">
                    <i class="fas fa-hashtag hvr-icon"></i>{{$tag->name}} 
                  </a>
                    
                @endforeach                  
              </div>            
            </div>
            
            <div class="relative bg-blue-200">
              <div class="py-10 px-8">
                <h3 class="text-2xl font-bold font-anton tracking-wide">
                  <a href="{{route('posts.show', $post)}}">
                    {{$post->name}}
                </a>
                </h3>
                
                <p class="leading-7">
                  {!!$post->extract!!}
                </p>
                <div class="mt-10 flex justify-between items-center">
                  <div class="text-gray-600 text-sm font-medium flex">
                    <p><i class="fas fa-clock"></i> {{$post->created_at->diffForHumans()}}</p>
                    
                  </div>
                  <a href="{{route('posts.show', $post)}}" class="flex items-center hover:text-green-800 font-anton shake-chunk">
                    <p class="mr-4">Leer más</p>
                    <i class="fas fa-plus-circle"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
      </div>
          
        @endforeach

            
            
        </div>
        <div class="contenedor mb-4">
          <div class="mt-4">
            {{$posts->links()}}
        </div>
        </div>
        
        
            
        
      
        
    
</x-app-layout>