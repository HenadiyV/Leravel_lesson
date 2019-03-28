@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    {{--{{$doc}}<br/>--}}
                    {{--{{$time}}<br/>--}}
                    {{--{{$item}}<br/>--}}
                    {{--@if(empty($entity))--}}
                        {{--<div class="panel-heading">Create new post</div>--}}
                    {{--@else--}}
                        {{--<div class="panel-heading">Edit post</div>--}}
                    {{--@endif--}}
                    <div class="panel-body">
                        <form action="{{ route('save')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{--@isset($doc)--}}
                                {{--{{ method_field('PUT') }}--}}
                            {{--@endisset--}}
                            <div class="row">
                                <div class="col-md-3">
                                <label for="scales">Доктор</label>
                                <input type="text" name="doctor" value="{{$doc->doctor}}"><br/>
                                </div>
                                <div class="col-md-3">
                                <label for="scales">Профиль</label>
                                <input type="text" name="doctor" value="{{$profile->id_profile}}"><br/>
                                </div>
                                <div class="col-md-3">
                                <label for="scales">Время записи</label>
                                <input type="text" name="time" value="{{$time}}"><br/>
                                </div>
                                <div class="col-md-3">
                                <label for="scales">Дата записи</label>
                                <input type="text" name="item" value="{{$item}}"><br/>
                                </div>
                                {{--@include('admin.fields.text', ['field' => 'surname', 'name' => 'Surname'])--}}
                                {{--@include('admin.fields.text', ['field' => 'name', 'name' => 'Name'])--}}
                                {{--@include('admin.fields.text', ['field' => 'patronymic', 'name' => 'Patronymic'])--}}
                                {{--@include('admin.fields.text', ['field' => 'phone', 'name' => 'Phone'])--}}
                                {{--@include('admin.fields.text', ['field' =>  'doc', 'name' => 'Doctor'])--}}
                                {{--@include('admin.fields.text', ['field' => 'item' , 'name' => 'Data'])--}}
                                {{--@include('admin.fields.text', ['field' =>  'id_room', 'name' => 'Room'])--}}
                                {{--@include('admin.fields.text', ['field' =>  'time', 'name' => 'Time'])--}}

                                <div class="col-md-3  ">


                                </div>

                            </div>
                            <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection