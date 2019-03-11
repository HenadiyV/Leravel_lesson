@extends('adminlte::page')

@section('content')
	<div class="container">
        <div class="row pull-right">

        </div>
		<div class="row">
			<div class="col-md-8 ">
				<div class="panel panel-default">
					<div class="panel-heading ">Categories</div>
					<div class="panel-body">
						@if($categories->count() > 0)
							<table class="table">
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Count</th>
                                    <th>Slug</th>
									<th>Actions</th>
								</tr>
								@foreach($categories as $category)
									<tr>
										<td>{{ $category->id }}</td>
										<td>{{ $category->title }}</td>
										<td>{{ $category->posts->count() }}</td>
                                        <td>{{ $category->slug}}</td>
										<td>
											<form action="{{ route('categories.destroy', $category->id) }}" method="POST">
												<a type="button" class="btn btn-default" href="{{ route('categories.edit', $category->id) }}">edit</a>
												{{ method_field('DELETE') }}
												{{ csrf_field() }}
												<button type="submit" class="btn btn-danger">delete</button>
											</form>
										</td>
									</tr>
								@endforeach
							</table>
						@else
							No categories
						@endif
					</div>


                </div>
            </div>
            <div class="col-md-2">
                <a type="button" class="btn btn-block btn-success btn-lg" href="{{route('categories.create')}}">Success</a>
            </div>
		</div>
	</div>
@endsection