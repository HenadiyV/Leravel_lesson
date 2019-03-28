@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading">Create new </div>
                    @else
                        <div class="panel-heading">Edit </div>
                    @endif
                    <div class="panel-body">
                        <form action="@if(empty($entity)){{ route('patients.store') }}@else{{ route('patients.update', $entity->id) }}@endif" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="row">
                                @include('admin.fields.text', ['field' => 'surname', 'name' => 'Surname'])
                                @include('admin.fields.text', ['field' => 'name', 'name' => 'Name'])
                                @include('admin.fields.text', ['field' => 'patronymic', 'name' => 'Patronymic'])
                                @include('admin.fields.text', ['field' => 'phone', 'name' => 'Phone'])
                                @include('admin.fields.text', ['field' => 'slug', 'name' => 'Slug'])
                                <div class="col-md-3  ">

                                    <select name="doctor">
                                        @foreach($doctors as $doctor)
                                            <option value="{{$doctor->id}}">{{$doctor->doctor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--<div class="col-md-3  ">--}}

                                    {{--<select name="id_profile">--}}
                                        {{--@foreach($profiles as $profile)--}}
                                            {{--<option value="{{$profile->id}}">{{$profile->name}}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--@include('admin.fields.select', ['field' => 'category_id', 'name' => 'Category', 'options' => $categories])--}}
                                {{--@include('admin.fields.select', ['field' => 'category_id', 'name' => 'Category', 'options' => $categories])--}}
                                {{--@include('admin.fields.image', ['field' => 'photo', 'name' => 'Photo'])--}}
                            </div>
                            <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection