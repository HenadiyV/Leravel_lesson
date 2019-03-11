@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading ">Добавление в список врачей</div>
                    @else
                        <div class="panel-heading ">Редактирование записи</div>
                    @endif
                    <div class="panel-body">
                        <form action="@if(empty($entity)){{ route('doctors.store') }}@else{{ route('doctors.update', $entity->id) }}@endif" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="row">
                                @include('admin.fields.text', ['field' => 'surname', 'name' => 'Surname'])
                                @include('admin.fields.text', ['field' => 'name', 'name' => 'Name'])
                                @include('admin.fields.text', ['field' => 'patronymic', 'name' => 'Patronymic'])

                                @include('admin.fields.select_profile', ['field' => 'id_profile', 'name' => 'Profile','options' => $profiles])
                                @include('admin.fields.select_room', ['field' => 'id_room', 'name' => 'Room','options' => $rooms])
                                @include('admin.fields.image', ['field' => 'photo', 'name' => 'Photo'])
                            </div>
                            <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection