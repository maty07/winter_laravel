@extends('layouts.app')

@section('content')

<section class="container">
	<div class="row">
		<div class="col-md-8 ofsset-md-2">
			<div class="card">
				<div class="card-header">
					<h5>Editar Género</h5>
					<div class="text-right">
						<a class="btn btn-sm btn-success" href="{{ route('generos.index') }}">Lista</a>
					</div>
				</div>
				<div class="card-body">
					{!! Form::model($genre, ['route' => ['generos.update', $genre->id],
						'method' => 'PUT' ]) !!}

						@include('genre.partials.form')
					
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>

@endsection