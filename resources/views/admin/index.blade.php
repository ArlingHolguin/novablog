@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
{{-- imprimiendo mensaje de sesion par las alertas --}}
@if (session('info'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><i class="far fa-bell"></i> Info!</strong> {{(session('info'))}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    
@endif

    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop