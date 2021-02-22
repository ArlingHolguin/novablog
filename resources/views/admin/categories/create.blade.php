@extends('adminlte::page')
@section('title', 'Crear Categorias')

{{-- @section('content_header')
    <h1>Crear Nueva Categoría</h1>
@stop --}}

@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            <h3>Crear Nueva Categoría</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['route' =>'admin.categories.store', 'autocomplete' => 'off']) !!}
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
                {!! Form::submit('Crear Categoría', ['class' => 'btn btn-dark text-white']) !!}
            </div>
           

            {!! Form::close() !!}
        </div>
        
    </div>
@stop
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
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
