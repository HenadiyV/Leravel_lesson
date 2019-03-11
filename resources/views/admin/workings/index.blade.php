@extends('adminlte::page')

@section('content')
	<div class="container">
        <div class="row pull-right">

        </div>
		<div class="row">
			<div class="col-md-8 ">
				<div class="panel panel-default">
					<div class="panel-heading ">Workings</div>
					<div class="panel-body">
						@if($workings->count() > 0)
							<table class="table">
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Count</th>
                                    <th>Slug</th>
									<th>Actions</th>
								</tr>
								@foreach($workings as $working)
									<tr>
										<td>{{ $working->id }}</td>
										<td>{{ $working->id_doctor }}</td>
										<td>{{ $working->id_room }}</td>
                                        <td>{{ $working->id_schedule}}</td>
                                        <td>{{ $working->status}}</td>
										<td>
											<form action="{{ route('workings.destroy', $working->id) }}" method="POST">
												<a type="button" class="btn btn-default" href="{{ route('workings.edit', $working->id) }}">edit</a>
												{{ method_field('DELETE') }}
												{{ csrf_field() }}
												<button type="submit" class="btn btn-danger">delete</button>
											</form>
										</td>
									</tr>
								@endforeach
							</table>
						@else
							No workings
						@endif
					</div>


                </div>
            </div>
            <div class="col-md-2">
                <a type="button" class="btn btn-block btn-success btn-lg" href="{{route('workings.create')}}">Success</a>
            </div>
		</div>
	</div>
@endsection