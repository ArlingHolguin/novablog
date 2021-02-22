@extends('adminlte::page')

@section('title', 'Crear post')

@section('content_header')
    <h1>Crear nuevo Posts</h1>
@stop

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
            Header
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => 'true']) !!}
            {{-- {!! Form::hidden('user_id', auth()->user()->id) !!} --}}

            @include('admin.posts.partials.form')
           
                {!! Form::submit('Crear Post', ['class'=> 'btn btn-primary btn-lg float-right font-weight-bold']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('vendor/editor/css/richtext.min.css')}}">
<style>
    .richText-dropdown{
        z-index: 1000 !important;
    }
    .image-wrapper{
        position: relative;
        padding-bottom: 56.25%;
    }
    .image-wrapper img{
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>    
    <script src="{{asset('vendor/editor/js/jquery.richtext.js')}}"></script>
    <script src="{{asset('vendor/editor/js/extract_body.js')}}"></script>
    <script>
         //imagen vizualizar
         $(document).ready( function() {
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
        document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
        }
    });
    </script>
    

    
@endsection