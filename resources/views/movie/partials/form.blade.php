        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('name', 'Nombre') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('slug', 'Slug') }}
                {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-5">
                {{ Form::label('author', 'Autor') }}
                {{ Form::text('author', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group col-md-7">
                {{ Form::label('actors', 'Actores') }}
                {{ Form::text('actors', null, ['class' => 'form-control']) }}
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-12">
                {{ Form::label('description', 'Descripcion') }}
                {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) }}
            </div>
        </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('country', 'País') }}
                {{ Form::text('country', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('premiere', 'Año Lanzamiento') }}
                {{ Form::text('premiere', null, ['class' => 'form-control']) }}
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-12">
                {{ Form::label('image_id', 'Poster') }}
                {{ Form::file('image_id', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('rating', 'Calificación') }}
                {{ Form::text('rating', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('category', 'Categoria') }}
                {{ Form::select('category', ['MOVIE' => 'MOVIE', 'SERIE' => 'SERIE'], null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                {{ Form::label('genres', 'Géneros') }}
               <div>
                    @foreach($genres as $genre)
                    <label>
                    {{ Form::checkbox('genres[]', $genre->id) }} {{ $genre->name }}
                    </label>
                    @endforeach
               </div>
            </div>
        </div>
        <div class="text-center">
             <a href="{{ route('trailers.index') }}" class="btn btn-danger">Cancelar</a>
             {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
        </div>