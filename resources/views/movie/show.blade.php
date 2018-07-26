@extends('layouts.app')

@section('content')

<section class="container">
     <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card text-center">
            	<div class="card-header">
            		<h1>{{ $movie->name }}</h1>
            	</div>
            	<div class="card-body">
            		<div class="text-center my-2">
            			<img src="{{ $movie->poster }}" width="200px" height="300px">
            		</div>
            		<hr>
            		@foreach($genres as $genre)
            			<h5 class="d-inline">{{ $genre->name }},</h5>
            		@endforeach
            		<hr>
					<h5>{{ $movie->author }}</h5>
            		<h5>{{ $movie->actors }}</h5>
            		<h5>Categoria: {{ $movie->category }}</h5>

            		@if(!empty($movie->country) || !empty($movie->premiere))
            		 <h5>{{ $movie->country}} {{$movie->premiere}}</h5>
            		@endif

					@if(!empty($movie->rating))
						<h5>Calificacion: {{ $movie->rating }}</h5>
					@endif

            		
            		<p>{{ $movie->description }}</p>

            	</div>
            </div>
        </div>
    </div>
</section>

@endsection