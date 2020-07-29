@extends('layouts.app')

@section('content')

@can('administrador')
<div class="container">
    <h2>Lista de usuarios registrados <a href="usuarios/create"><button type="button"
                class="btn btn-success float-right">Agregar Usuario</button></a></h2>
    <h6>
        @if($search)
        <div class="alert alert-primary" role="alert">
            Los resultados de '{{$search}}'
        </div>
        @endif
    </h6>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Imagen</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @foreach($user->roles as $role)
                    {{$role->name}}
                    @endforeach
                </td>
                <td>
                    <img src="{{asset('imagenes/' .$user->imagen)}}" alt="{{$user->imagen}}" height="50px" width="50px">
                </td>
                <td>
                    <form action="{{route('usuarios.destroy', $user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('usuarios.show', $user->id)}}"><button type="button"
                                class="btn btn-secondary">Ver</button></a>
                        <a href="{{route('usuarios.edit', $user->id)}}"><button type="button"
                                class="btn btn-primary">Editar</button></a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="mx-auto">
            {{$users->links()}}
        </div>
    </div>
</div>
@endcan

@endsection
