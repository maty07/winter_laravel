<div class="form-group">
	{{ Form::label('name', 'Nombre de género') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) }}
</div>

<div class="form-group">
	{{ Form::submit('Enviar', ['class' => 'btn btn-sm btn-primary']) }}
</div>