@extends('adminlte::page')
@section('content')

    <div class="container">
        <div class="row pull-right">

        </div>
        <div class="row">
            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading ">Doctors</div>
                    <div class="panel-body">
                        @if($doctors->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Фамилия</th>
                                    <th>Имя</th>
                                    <th>Отчество</th>
                                    <th>профиль</th>
                                    <th>кабинет</th>
                                    <th>Фото</th>
                                </tr>
                                @foreach($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->surname }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->patronymic }}</td>
                                        <td>{{ $doctor->id_profile}}</td>
                                        <td>{{ $doctor->id_room }}</td>

                                        <td><img src="{{ Storage::url($doctor->photo) }} " width="50" alt=""> </td>
                                        <td>
                                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('doctors.edit', $doctor->id) }}">edit</a>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            Список докторов пуст.
                        @endif
                    </div>


                </div>
            </div>
            <div class="col-md-2">
                <a type="button" class="btn btn-block btn-success btn-lg" href="{{route('doctors.create')}}">Success</a>
            </div>
        </div>
    </div>
@endsection

