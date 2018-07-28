@extends('layouts.app')

@section('content')
<section class="container">
     <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Nueva Pelicula/Serie</h4>    
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'trailers.store', 'enctype' => 'multipart/form-data']) !!}
                        @include('movie.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js"></script>﻿
<script src="{{ asset('js/jquery.stringtoslug.js') }}"></script>
<script>
    $(function(){
        $.noConflict();
        $('#name, #slug').stringToSlug({
            callback: function(text){
                $('#slug').val(text);
            }
        }); 
    });
</script>

@endsection


