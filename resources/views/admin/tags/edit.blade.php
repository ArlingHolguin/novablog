@extends('adminlte::page')
@section('title', 'Editar Tags')

{{-- @section('content_header')
    <h1>Lista de Categorías</h1>
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
      <h3>Editar Etiqueta</h3>
  </div>
  <div class="card-body">
      {!! Form::model($tag, ['route' =>['admin.tags.update', $tag], 'method' => 'put', 'autocomplete' => 'off']) !!}
      
      @include('admin.tags.partials.form')

      <div class="float-right">
          {!! Form::submit('Editar Etiqueta', ['class' => 'btn btn-dark text-white']) !!}
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
@stop
