@extends('layouts.app')

@section('content')

@can('administrador')
	<img src="{{asset('imagenes/' .$user->imagen)}}" alt="{{$user->imagen}}" class="float-sm-right mr-4 mt-4" height="250px" width="250px">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">{{$user->name}}
			<span class="small">(@foreach($user->roles as $role)
              {{$role->name}}
            @endforeach)</span></h1><br>
            <p class="lead">{{$user->id}}</p>
			<p class="lead">{{$user->email}}</p>
		</div>
	</div>
@endcan

@endsection