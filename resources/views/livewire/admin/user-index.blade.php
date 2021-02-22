<div>
    <div class="card">
        <div class="card-header">
            <div class="input-group flex-nowrap">
                <span class="input-group-text bg-primary" id="addon-wrapping"><i class="fab fa-searchengin"></i> Buscar</span>
                <input wire:model="search" type="text" class="form-control form-control-lg" placeholder="Ingrese el nombre o correo del usuario" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
        </div>
        @if ($users->count())    
            <div class="card-body">
                <table class="table table-success table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td with="10px">
                                <a class="btn btn-outline-success btn-sm" href="{{route('admin.users.edit', $user)}}"><i class="fas fa-edit"></i></a>
                                </td>
                                <td with="10px">
                                    {{-- <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger btn-sm type="submit"><i class="fas fa-trash-alt"></i></button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$users->links()}}
            </div>
            @else 
    
            
                <div class="alert alert-warning mx-4 my-4" role="alert">
                    <h4 class="alert-heading"><i class="far fa-bell"></i> No hay registros!</h4>
                    <p>No se encontraron registros de usuarios en la Base de Datos que coincidan con lo que has ingresado</p>
                    <hr>
                    <p class="mb-0">Intenta con otros términos de búsqueda.</p>
                  </div>
           
            
        @endif
    
    </div>
</div>
