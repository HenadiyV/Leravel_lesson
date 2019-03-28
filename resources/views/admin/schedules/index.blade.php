@extends('adminlte::page')

@section('content')
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <div class="container">
        <div class="row pull-right">

        </div>
        <div class="row">

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">schedules</div>
                    <div class="panel-body">
                        @if($doctors->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Фамилия</th>

                                    <th>Имя</th>

                                    <th>Отчество</th>

                                    <th>Профиль</th>

                                    <th>Кабинет</th>
                                    <th>График</th>


                                </tr>
                                @foreach($doctors as $doctor)
                                    <tr>

                                        <td>{{ $doctor->id }} </td>
                                        <td >{{ $doctor->surname }}</td>
                                        <td>{{ $doctor->name}}</td>
                                        <td>{{ $doctor->patronymic}}</td>

                                        <td >{{ $doctor->id_profile }}  </td>
                                        <td >{{ $doctor->id_room }}</td>
                                        <td><a type="button" class="btn btn-default" href="{{ route('schedules.show', $doctor->id) }}">График</a>

                                            {{--<form action="{{ route('schedules.destroy', $doctor->id) }}" method="POST">--}}
                                                {{--<a type="button" class="btn btn-default" href="{{ route('schedules.edit', $doctor->id) }}">edit</a>--}}
                                               {{----}}
                                                {{--{{ method_field('DELETE') }}--}}
                                                {{--{{ csrf_field() }}--}}
                                                {{--<button type="submit" class="btn btn-danger">delete</button>--}}
                                            {{--</form>--}}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            No schedules
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-md-2">
                <a type="button" class="btn btn-block btn-success btn-lg" href="{{route('schedules.create')}}">Success</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".my_ul").hide();
            $(".my").click(function(){
                // $(this).parent().next().slideToggle();
               $(this).children().first().slideToggle();
            });
        });
    </script>
@endsection