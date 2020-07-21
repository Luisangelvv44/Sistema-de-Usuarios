@extends('layouts.app')

@section('content')

@can('administrador')
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      	<h2>Roles de usuarios @include('roles.modal')</h2>
      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
          </tr>
        </thead>
        <tbody>
        	@foreach($roles as $role)
          	<tr>
            		<th scope="row">{{$role->id}}</th>
            		<td>{{$role->name}}</td>
          	</tr>
        	@endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endcan

@endsection