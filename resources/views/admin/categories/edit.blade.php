@extends('adminlte::page')
@section('title', 'Dashboard')

{{-- @section('content_header')
    <h1>Editar Categoría</h1>
@stop --}}

@section('content')
{{-- imprimiendo mensaje de sesion par las alertas --}}
@if (session('info'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><i class="far fa-bell"></i> Info!</strong> {{(session('info'))}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    
@endif

<div class="card">
    <div class="card-header bg-primary">
        <h3>Editar Categoría {{$category->name}}</h3>
    </div>
    <div class="card-body">
        {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put', 'autocomplete' => 'off']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría.']) !!}
            @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
           
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoría.', 'readonly']) !!}
            @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            
        </div>
        <div class="float-right">
            {!! Form::submit('Actualizar Categoría', ['class' => 'btn btn-dark text-white']) !!}
        </div>
       

        {!! Form::close() !!}
    </div>
    
</div>
@stop
@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script>
    $(document).ready( function() {
$("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
});
});
</script>
@endsection
