@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading">Create new schedule</div>
                    @else
                        <div class="panel-heading">Edit schedule</div>
                    @endif
                    <div class="panel-body">
                        <form action="@if(empty($entity)){{ route('schedules.store') }}@else{{ route('schedules.update', $entity->id) }}@endif" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="row">
                                @include('admin.fields.text', ['field' => 'day', 'name' => 'Day'])
                                @include('admin.fields.text', ['field' => 'time', 'name' => 'Time'])
                                @include('admin.fields.text', ['field' => 'id_doctor', 'name' => 'Id_doctor'])
                            </div>
                            <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection