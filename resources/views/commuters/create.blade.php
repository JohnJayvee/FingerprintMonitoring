@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'commuters.store']) !!}

		<div class="mb-3">
			{{ Form::label('FirstName', 'FirstName', ['class'=>'form-label']) }}
			{{ Form::text('FirstName', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('LastName', 'LastName', ['class'=>'form-label']) }}
			{{ Form::text('LastName', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('Address', 'Address', ['class'=>'form-label']) }}
			{{ Form::text('Address', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('Age', 'Age', ['class'=>'form-label']) }}
			{{ Form::text('Age', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop