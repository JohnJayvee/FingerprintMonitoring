@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('commuters.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Address</th>
				<th>Age</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($commuters as $commuter)

				<tr>
					<td>{{ $commuter->id }}</td>
					<td>{{ $commuter->FirstName }}</td>
					<td>{{ $commuter->LastName }}</td>
					<td>{{ $commuter->Address }}</td>
					<td>{{ $commuter->Age }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('commuters.show', [$commuter->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('commuters.edit', [$commuter->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['commuters.destroy', $commuter->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
