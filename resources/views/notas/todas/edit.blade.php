@extends('layouts.app')

@section('content')
	
	{!! Form::open(['action' => ['NotasController@update', $nota->id], 'method' => 'PATCH']) !!}
	{{ Form::token() }}
	<div class="card text-center mx-auto" style="width: 250px;">
		<div class="card-header">
			<input type="text" name="titulo" class="form-control" value="{{$nota->titulo}}">
		</div>
		<div class="card-body">
			<textarea name="texto" class="form-control" id="" rows="6">{{$nota->texto}}</textarea>
		</div>
		<div class="card-footer text-muted small">
			{{$nota->updated_at}}
			<br>
			<a href="{{URL::action('NotasController@index')}}">
			<button type="button" class="btn btn-danger float-right">Cancelar</button>
			</a>
			<a href="{{URL::action('NotasController@edit', $nota->id)}}">
			<button type="submit" class="btn btn-info float-right mr-1">Guardar</button>
			</a>
		</div>
	</div>
	{!! Form::close() !!}

@endsection