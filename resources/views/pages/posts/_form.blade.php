<div class="form-group">
	{!! Form::label('title', null, ['class' => 'control-label']) !!}
	{!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', null, ['class' => 'control-label']) !!}
	{!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => 10, 'required' => 'required']) !!}
</div>

<div class="form-group">
	{!! Form::submit($buttonText, ['class' => 'btn btn-primary']) !!}
</div>