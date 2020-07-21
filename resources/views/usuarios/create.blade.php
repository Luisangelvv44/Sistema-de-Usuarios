@extends('layouts.app')

@section('content')

@can('administrador')
<div class="container">
	<div class="row">
		<div class="col-sm-6">
      <h2>Crear nuevo usuario</h2>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
  </div>
<form action="/usuarios" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="row">
    <div class="form-group col-md-6">
      <label>Nombre</label>
      <input type="text" name="name" class="form-control" placeholder="Escribe tu nombre">
    </div>

    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Ejemplo@Email.com">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label>Contrasena</label>
      <input type="password" name="password" class="form-control" placeholder="Escribe tu contrasena">
    </div>

    <div class="form-group col-md-6">
      <label>Confirme la contrasena</label>
      <input type="password" name="password_confirmation" class="form-control" placeholder="Repite la contrasena">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label>Rol</label>
      <select name="rol" class="form-control">
        <option selected disabled>Elige Rol</option>
        @foreach($roles as $role)
        <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group col-md-6">
      <label>Imagen</label>
      <input type="file" name="imagen" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <button type="submit" class="btn btn-primary">Registrar</button>
      <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
  </div>

</form>
</div>
@endcan

@endsection