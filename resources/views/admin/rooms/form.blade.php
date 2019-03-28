@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading">Create new room</div>
                    @else
                        <div class="panel-heading">Edit room</div>
                    @endif
                    <div class="panel-body">
                        <form action="@if(empty($entity)){{ route('rooms.store') }}@else{{ route('rooms.update', $entity->id) }}@endif" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="row">
                                @include('admin.fields.text', ['field' => 'name_room', 'name' => 'Number'])

                            </div>
                            <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection