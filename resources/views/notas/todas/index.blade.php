@extends('layouts.app')

@section('content')

	@include('notas.todas.modal')

	<div class="d-flex flex-wrap justify-content-around">

	@foreach($notas as $nota)

	@include('notas.todas.modal-destroy')
	
	<div class="card border-success mb-3 mt-4" style="max-width: 18rem;">
		<div class="card-header bg-transparent border-success"><b>{{$nota->titulo}}</b>
			<p class="small float-right">{{$nota->created_at}}</p>
		</div>
			<div class="card-body text-success">
				<p class="card-text">{{$nota->texto}}</p>
			</div>
		<div class="card-footer bg-transparent border-success">
			<button type="button" class="btn btn-danger float-right"  data-toggle="modal" data-target="#modalEliminar-{{$nota->id}}">Eliminar</button>
			<a href="{{URL::action('NotasController@edit', $nota->id)}}">
			<button type="button" class="btn btn-info float-right mr-1">Editar</button>
			</a>
		</div>
	</div>
	@endforeach

	</div>

@endsection