@extends('layouts.app')

@section('content')

<section class="container">
     <div class="row">
         <div class="col-md-8 offset-md-2">
            @if($msj = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $msj }}</p>
                </div>
            @endif
             <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Lista de Peliculas</h4>
                    <div class="text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('trailers.create') }}">Nuevo</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10">#</th>
                                <th>Nombre</th>
                                <th>Autor</th>
                                <th>Categoria</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($movies) > 0)
                                @foreach($movies as $movie)
                                    <tr>
                                        <td>{{ $movie->id }}</td>
                                        <td>{{ $movie->name }}</td>
                                        <td>{{ $movie->author }}</td>
                                        <td>{{ $movie->category }}</td>
                                        <td width="10px">
                                            <a class="btn btn-info btn-sm" href="{{ route('trailers.show', $movie->slug) }}">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a class="btn btn-warning btn-sm" href="{{ route('trailers.edit', $movie->id) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['trailers.destroy', $movie->id], 
                                            'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                               <td colspan="5"><p>No existen registros</p></td>
                            @endif
                        </tbody>
                    </table>
                    {{ $movies->links() }}
                </div>
             </div>
         </div>
     </div>
</section>

@endsection