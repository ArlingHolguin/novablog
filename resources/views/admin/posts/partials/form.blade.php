<div class="form-group">
    {!! Form::label('name', 'Nombre*') !!}                
    {!! Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Ingrese el nombre del post']) !!}
    @error('name')
        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
            <strong>Verifica!</strong>{{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>                    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug*') !!}
    {!! Form::text('slug', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Ingrese el slug del post', 'readonly']) !!}
    @error('slug')
        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
            <strong>Verifica!</strong>{{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>                    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control form-control-lg']) !!}
    @error('category_id')
        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
            <strong>Verifica!</strong>{{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>                    
    @enderror
</div>

<p class="font-weight-bold">Etiquetas</p>             
    <div class="card">
        <div class="card-body">   
            <div class="form-check form-switch">            
                @foreach ($tags as $tag)                
                    <div class="form-check-inline mb-2 mt-1">
                        {!! Form::checkbox('tags[]', $tag->id, null, ['class' => 'form-check-input ml-2  mt-1']) !!}
                        {!! Form::label('name', $tag->name, ['class' => 'form-check-label']) !!}                        
                    </div>                                                    
                 @endforeach
                 @error('tags')
                        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                            <strong>Verifica!</strong>{{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>                    
                    @enderror
            </div>
        </div> 
    </div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <div class="card">
        <div class="card-body ">
            <div class="form-check form-check-inline">                    
                {!! Form::radio('status', 1, true, ['class' => 'form-check-input mt-1']) !!}
                {!! Form::label('status', 'Borrador', ['class' => 'form-check-label']) !!}
            </div>
            <div class="form-check form-check-inline">                    
                {!! Form::radio('status', 2, true, ['class' => 'form-check-input mt-1']) !!}
                {!! Form::label('status', 'Publicado', ['class' => 'form-check-label']) !!}
                    @error('status')
                            <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                                <strong>Verifica!</strong>{{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>                    
                        @enderror  
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
           @isset ($post->image)
           <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
           @else
           <img id="picture" src="https://cdn.pixabay.com/photo/2015/03/23/17/43/relaxation-686392_960_720.jpg" alt="">
           @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">                   
            {!! Form::label('file', 'Imagen del Post') !!}
            {!! Form::file('file', ['class' => 'form-control form-control-lg', 'accept' => 'image/*']) !!}
        </div>
        @error('file')
                        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                            <strong>Verifica!</strong>{{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>                    
                    @enderror  
        <div class="card-footer bg-warning">
            <small class="text-white">
                <i class="fas fa-info-circle x3 text-white"></i>
                 Para una mejor visualización de la imagen que vas a 
                 poner en el post, debe tener medidas 16:9.
                </small>            
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
            <strong>Verifica!</strong>{{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror  
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
            <strong>Verifica!</strong>{{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror  
</div>