@extends('adminlte::page')
@section('title', 'Dashboard')

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
            <h3>Lista de Categorías</h3>
        </div>
        <div class="card-body">
           <table class="table table-success table-hover">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>NOMBRE</th>
                       <th colspan="2"><div class=" d-flex float-right">
                     @can('admin.categories.create')
                        <a class="btn btn-dark text-white" href="{{route('admin.categories.create')}}">Crear</a>
                     @endcan
                    </div></th>
                    </tr> 
               </thead>
               <tbody>
                   @foreach ($categories as $category)
                   <tr>
                       <td>{{$category->id}}</td>
                       <td>{{$category->name}}</td>
                       <td width="10px">
                          @can('admin.categories.edit')
                          <a class="btn btn-outline-success btn-sm" href="{{route('admin.categories.edit', $category)}}"><i class="fas fa-edit"></i></a>
                          @endcan
                       </td>
                       <td width="10px">
                           @can('admin.categories.destroy')
                           <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                @csrf
                                @method('delete')
                            <button class="btn btn-outline-danger btn-sm type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                               
                           @endcan
                           
                       </td>
                   </tr>
                       
                   @endforeach

               </tbody>

           </table>
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
@stop

