<x-app-layout>
    <div class="contenedor py-8 sm: mx-2">
        <h1 class="text-3xl font-semibold text-green-800 font-anton tracking-wide">{{$post->name}}</h1>
        <div class="text-lg text-gray-700 mb-2">
            {!! $post->extract !!}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Contenido Principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                    <img class="w-full h-80 object-cover object-center rounded-lg" src="{{Storage::url($post->image->url)}}" alt="{{$post->name}}">
                        
                    @else
                    <img class="w-full h-80 object-cover object-center rounded-lg" src="https://cdn.pixabay.com/photo/2015/03/23/17/43/relaxation-686392_960_720.jpg">
                        
                    @endif
                </figure>
                
                <div class=" text-base text-gray-900 text-justify mt-4">
                    {!! $post->body !!}
                </div>
            </div>

            {{-- Contenido relacionado cel post --}}
            <aside>
                <h2 class="text-2xl text-gray-900 font-bold">Artículos relacionados en {{$post->category->name}}</h2>
                <ul>
                    @foreach ($similares as $similar)
                    <li>
                        <a class="flex " href="{{route('posts.show', $similar)}}">
                        {{-- <a href="{{route('posts.show', $post)}}"> --}}
                        <article class="w-full h-40 bg-cover bg-center my-3 rounded-lg " style="background-image: url(@if($similar->image){{Storage::url($similar->image->url)}}@else https://cdn.pixabay.com/photo/2015/03/23/17/43/relaxation-686392_960_720.jpg @endif)">
                            <h2 class="text-xl text-white leading-5 font-bold pt-2 mt-2 ml-2 mr-2">                               
                            {{$similar->name}}                                
                            </h2>
                            <p class="text-base text-white leading-3 font-light mt-2 ml-2 mr-2">
                                {!! $similar->extract !!} 
                            </p>
                           
                        </article>
                    </a>
                        
                    </li>
                        
                    @endforeach
                </ul>
                
                    <div class="mt-4">
                        {{$similares->links()}}
                    </div>
               
                

            </aside>
            

        </div>

    </div>
</x-app-layout>