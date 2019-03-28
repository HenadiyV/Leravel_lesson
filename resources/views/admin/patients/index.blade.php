@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row pull-right">

        </div>
        <div class="row">

            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>
                    <div class="panel-body">
                        @if($doctors->count() > 0 )
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Фамилия</th>
                                    <th>Имя</th>
                                    <th>Отчество </th>
                                    <th>Профиль</th>

                                </tr>
                                @foreach($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->surname }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->patronymic }}</td>
                                        <td>{{ $doctor->id_profile }}</td>


                                        <td>
                                            <a type="button" class="btn btn-default" href="{{ route('patients.show', $doctor->id) }}">записаться</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            No doctors
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-md-2">
                <a type="button" class="btn btn-block btn-success btn-lg" href="{{route('posts.create')}}">Success</a>
            </div>
        </div>
    </div>
@endsection