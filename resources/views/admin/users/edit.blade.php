@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignar un rol</h1>
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
    <div class="card-body">
        <p>Nombre: </p>
        <p class="form-control">{{$user->name}}</p>
        <h2 class="h5">Listado de roles</h2>
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $role)
                <div class="form-check form-switch">
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'form-check-input mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
    
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
@stop