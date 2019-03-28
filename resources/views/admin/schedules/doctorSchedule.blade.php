@extends('adminlte::page')

@section('content')
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <style>
        .my{
            cursor: pointer;
        }
    </style>
    <div class="container">
        <div class="row pull-right">

        </div>
        <div class="row">

            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading">schedules</div>
                    <div class="panel-body">

                        <br/>

                        @if(isset($schedule))
                            <div class="row">
                                <div class="col-md-12">
                            <table class="table">
                                    <tr>
                                        <th>Ф.И.О</th>
                                        <td>{{ $schedule->doctor}} </td>

                                </tr>
                                <tr>
                                    <th>Профиль</th>

                                    <td>{{ $doctors->id_profile}} </td>

                                </tr>
                                        <tr>
                                            <th>Понедельник</th>
                                        <td class="my">{{ $schedule['monday']}}

                                            <ul class="my_ul">
                                                <li>{{ $time[$schedule->id_startMonday] }}</li>
                                                <li>{{ $time[$schedule->id_stopMonday] }}</li>
                                            </ul>
                                        </td>
                                    </tr>
                                <tr>
                                    <th>Вторник</th>
                                        <td class="my">{{ $schedule->tuesday }}

                                            <ul class="my_ul">
                                                <li> {{ $time[$schedule->id_startTuesday]}} </li>
                                                <li>{{ $time[$schedule->id_stopTuesday] }}</li>
                                            </ul>
                                        </td>
                                </tr>
                                    <tr>
                                        <th>Среда</th>
                                        <td class="my">{{ $schedule->wednesday }}

                                            <ul class="my_ul">
                                                <li>{{ $time[$schedule->id_startWednesday] }}</li>
                                                <li>{{ $time[$schedule->id_stopWednesday]}}</li>
                                            </ul>
                                        </td>
                                </tr>
                                        <tr>
                                            <th>Четверг</th>
                                        <td class="my">{{ $schedule->thursday }}

                                            <ul class="my_ul">
                                                <li>{{ $time[$schedule->id_startThursday ]}}</li>
                                                <li>{{ $time[$schedule->id_stopThursday] }}</li>
                                            </ul>
                                        </td>
                                </tr>
                                            <tr>
                                                <th>Пятница</th>
                                        <td class="my">{{ $schedule->friday }}

                                            <ul class="my_ul">
                                                <li>{{ $time[$schedule->id_startFriday] }}</li>
                                                <li>{{ $time[$schedule->id_stopFriday] }}</li>
                                            </ul>
                                        </td>
                                </tr>
                                                <tr>
                                                    <th>Суббота</th>
                                        <td class="my">{{ $schedule->saturday }}

                                            <ul class="my_ul">
                                                <li>{{ $time[$schedule->id_startSaturday] }}</li>
                                                <li>{{ $time[$schedule->id_stopSaturday] }}</li>
                                            </ul>
                                        </td>
                                </tr>
                                                    <tr>
                                                        <th>Воскресенье</th>
                                        <td class="my">{{ $schedule->sunday }}

                                            <ul class="my_ul">
                                                <li>{{ $time[$schedule->id_startSunday] }}</li>
                                                <li>{{ $time[$schedule->id_stopSunday] }}</li>
                                            </ul>
                                        </td>

                                    </tr>
                                <tr>
                                    <th>Статус </th>
                                    <td>{{ $schedule->status }}</td>
                                </tr>

                            </table>
                                </div>
                                <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST">
                                    <a type="button" class="btn btn-default" href="{{ route('schedules.edit', $schedule->id) }}">edit</a>

                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                        @else
                            No schedules
                        @endif
                    </div>
                </div>

            </div>
            {{--<div class="col-md-2">--}}
                {{--<a type="button" class="btn btn-block btn-success btn-lg" href="{{route('schedules.create')}}">Success</a>--}}
            {{--</div>--}}
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