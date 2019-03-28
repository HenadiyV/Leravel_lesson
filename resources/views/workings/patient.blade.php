@extends('layouts.app')

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
                    <div class="panel-heading">Запись к врачу</div>
                    <div class="panel-body">
                        @if(isset($schedule) && $schedule->status==1)
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
                                            @if($schedule->monday=='рабочий')
                                                <th>Понедельник</th>

                                                <td class="my">@foreach($mydate as $md)

                                                        @if($schedule->mon==$md[0])
                                                            <?php $tem=$md[1]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach

                                                    <ul class="my_ul">
                                                        @for($i=$schedule->id_startMonday;$i<$schedule->id_stopMonday;$i++)
                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'data' => $tem,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                        @endfor
                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->tuesday=='рабочий')
                                                <th>Вторник</th>
                                                <td class="my">@foreach($mydate as $md)

                                                        @if($schedule->tues ==$md[0])
                                                            <?php $tem=$md[1]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach

                                                    <ul class="my_ul">
                                                        @for($i=$schedule->id_startTuesday;$i<$schedule->id_stopTuesday;$i++)
                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'item' => $tem,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                        @endfor

                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->wednesday=='рабочий')
                                                <th>Среда</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->wednes==$md[0])
                                                            <?php $tem=$md[1]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach


                                                    <ul class="my_ul">
                                                        @for($i=$schedule->id_startWednesday;$i<$schedule->id_stopWednesday;$i++)
                                                            <li><a a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'item' => $tem,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                        @endfor


                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->thursday=='рабочий')

                                                <th>Четверг</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->thurs ==$md[0])
                                                            <?php $tem=$md[1]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach


                                                    <ul class="my_ul">
                                                        @for($i=$schedule->id_startThursday;$i<$schedule->id_stopThursday;$i++)
                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'item' => $tem,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                        @endfor

                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->friday=='рабочий')

                                                <th>Пятница</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->fri ==$md[0])
                                                            <?php $tem=$md[1]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach


                                                    <ul class="my_ul">
                                                        @for($i=$schedule->id_startFriday;$i<$schedule->id_stopFriday;$i++)
                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'item' => $tem,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                        @endfor

                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->saturday=='рабочий')

                                                <th>Суббота</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->satur ==$md[0])
                                                            <?php $tem=$md[1]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach


                                                    <ul class="my_ul">
                                                        @for($i=$schedule->id_startSaturday;$i<$schedule->id_stopSaturday;$i++)
                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'item' => $tem,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                        @endfor

                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->sunday=='рабочий')

                                                <th>Воскресенье</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->sun ==$md[0])
                                                            <?php $tem=$md[1]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach


                                                    <ul class="my_ul">
                                                        @for($i=$schedule->id_startSunday;$i<$schedule->id_stopSunday;$i++)
                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'data' => $tem,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                        @endfor

                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>


                                    </table>
                                </div>

                                @else
                                    Доктор не принимает
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
