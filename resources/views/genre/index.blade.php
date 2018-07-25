@extends('layouts.app')

@section('content')

<section class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					<h5 class="text-center">Lista de Generos</h5>
					<div class="text-right">
						<a href="{{ route('generos.create') }}" title="Nuevo Genero" class="btn btn-sm btn-primary">Nuevo</a>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">#</th>
								<th>Nombre</th>
								<th colspan="2">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@if(count($genres))
								@foreach($genres as $genre)
									<tr>
										<td>{{ $genre->id }}</td>
										<td>{{ $genre->name }}</td>
										<td width="10px">
											<a class="btn btn-sm btn-warning" href="{{ route('generos.edit', $genre->id) }}">Editar</a>
										</td>
										<td width="10px">
											{!! Form::open(['route' => ['generos.destroy', $genre->id],
											'method' => 'DELETE']) !!}
											<button class="btn btn-sm btn-danger">Eliminar</button>
											{!! Form::close() !!}
										</td>
									</tr>
								@endforeach
							@else
							<td colspan="3">No existen registros</td>
							@endif
						</tbody>
					</table>
					{{ $genres->links() }}
				</div>
			</div>
		</div>
	</div>
</section>

@endsection