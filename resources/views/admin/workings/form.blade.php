@extends('adminlte::page')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 ">
				<div class="panel panel-default">
					@if(empty($entity))
						<div class="panel-heading ">Create new working</div>
					@else
						<div class="panel-heading ">Edit working</div>
					@endif
					<div class="panel-body">
						<form action="@if(empty($entity)){{ route('workings.store') }}@else{{ route('workings.update', $entity->id) }}@endif" method="POST">
							{{ csrf_field() }}
							@isset($entity)
								 {{ method_field('PUT') }}
							@endisset
							<div class="row">
                                @include('admin.fields.select', ['field' => 'id_doctor', 'name' => 'id_doctor', 'options' => $rooms])
                                @include('admin.fields.select', ['field' => 'id_room', 'name' => 'id_room', 'options' => $rooms])
                                @include('admin.fields.select', ['field' => 'id_schedule', 'name' => 'id_schedule', 'options' => $schedule])
                                @include('admin.fields.checkbox', ['field' => 'status', 'name' => 'status'])
								{{--@include('admin.fields.image', ['field' => 'image', 'name' => 'Slug'])--}}
							</div>
							<input type="submit" value="save">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection