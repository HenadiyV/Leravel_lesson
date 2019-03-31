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
                                                <th >Понедельник </th>
                                                @if($schedule->monday=='рабочий')


                                                <td  class="my"> @foreach($mydate as $md)

                                                        @if($schedule->mon ==$md[1])
                                                            <?php $mn=$md[1]?>
                                                            <?php $th_mon=$md[0]?>
                                                            <?php $th_mon_d=$md[1]?>
                                                                {{$md[0]}}{{$md[2]}}
                                                               {{--{{$th_mon_d=$md[1]}}--}}
                                                        @endif
                                                    @endforeach
                                                    <ul class="my_ul">

                                                        @foreach($monday as $sch)

                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                        'time' => $sch[1],
                                        'id_time'=>$sch[0],
                                        'data' => $mn,
                                        'schedule' => $schedule->id_doctor]) }}">{{ $sch[1]}}</a></li>

                                                        @endforeach
                                                    </ul>

                                                </td>
                                                @endif
                                            </tr>

                                    @if($schedule->tuesday=='рабочий')
                                        <tr>
                                        <th>Вторник</th>
                                        <td class="my">@foreach($mydate as $md)

                                        @if($schedule->tues ==$md[1])
                                        <?php $tu=$md[1]?>
                                                    <?php $tu_d=$md[0]?>
                                            {{$md[0]}}
                                        {{$md[2]}}
                                        @endif
                                        @endforeach
                                            <ul class="my_ul">

                                                @foreach($tuesday as $sch)

                                                    <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                        'time' => $sch[1],
                                        'id_time'=>$sch[0],
                                        'data' => $tu,
                                        'schedule' => $schedule->id_doctor]) }}">{{ $sch[1]}}</a></li>

                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    @endif
                                        @if($schedule->wednesday=='рабочий')
                                        <tr>
                                            <th>Среда</th>
                                            <td class="my">
                                            @foreach($mydate as $md)
                                            @if($schedule->wednes==$md[1])
                                            <?php $we=$md[1]?>
                                            {{$md[0]}}{{$md[2]}}
                                            @endif
                                                @endforeach
                                                <ul class="my_ul">

                                                    @foreach($wednesday as $sch)

                                                        <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                        'time' => $sch[1],
                                        'id_time'=>$sch[0],
                                        'data' => $we,
                                        'schedule' => $schedule->id_doctor]) }}">{{ $sch[1]}}</a></li>

                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                        @endif
                                        @if($schedule->thursday=='рабочий')
                                        <tr>
                                            <th>Четверг</th>
                                            <td class="my"> @foreach($mydate as $md)
                                            @if($schedule->thurs ==$md[1])
                                            <?php $th=$md[1]?>
                                                {{$md[0]}}{{$md[2]}}
                                            @endif
                                            @endforeach

                                                <ul class="my_ul">

                                                    @foreach($thursday as $sch)

                                                        <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                        'time' => $sch[1],
                                        'id_time'=>$sch[0],
                                        'data' => $th,
                                        'schedule' => $schedule->id_doctor]) }}">{{ $sch[1]}}</a></li>

                                                    @endforeach
                                                </ul>
                                            </td>

                                        </tr>
                                        @endif
                                        @if($schedule->friday=='рабочий')
                                        <tr>
                                            <th>Пятница</th>
                                                <td class="my"> @foreach($mydate as $md)
                                                 @if($schedule->fri ==$md[1])
                                        <?php $fr=$md[1]?>

                                            {{$md[0]}}{{$md[2]}}
                                        @endif
                                        @endforeach
                                            <ul class="my_ul">

                                                @foreach($friday as $sch)

                                                    <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                        'time' => $sch[1],
                                        'id_time'=>$sch[0],
                                        'data' => $fr,
                                        'schedule' => $schedule->id_doctor]) }}">{{ $sch[1]}}</a></li>

                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                            @endif
                                        @if($schedule->saturday=='рабочий')
                                            <tr>
                                                <th>Суббота</th>
                                                <td class="my">

                                                    @foreach($mydate as $md)

                                                        @if($schedule->satur ==$md[1])
                                                            <?php $sa=$md[1]?>

                                                                {{$md[0]}}{{$md[2]}}
                                                        @endif
                                                    @endforeach

                                                    <ul class="my_ul">

                                                        @foreach($saturday as $sch)

                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                        'time' => $sch[1],
                                        'id_time'=>$sch[0],
                                        'data' => $sa,
                                        'schedule' => $schedule->id_doctor]) }}">{{ $sch[1]}}</a></li>


                                                        @endforeach


                                                    </ul>
                                                </td>

                                            </tr>
                                        @endif
                                        @if($schedule->sunday=='рабочий')
                                        <tr>
                                        <th>Воскресенье</th>
                                        <td class="my">

                                        @foreach($mydate as $md)

                                        @if($schedule->sun ==$md[1])
                                        <?php $su=$md[1]?>

                                            {{$md[0]}}{{$md[2]}}
                                        @endif
                                        @endforeach

                                        <ul class="my_ul">

                                        @foreach($sunday as $sch)

                                        <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                        'time' => $sch[1],
                                        'id_time'=>$sch[0],
                                        'data' => $su,
                                        'schedule' => $schedule->id_doctor]) }}">{{ $sch[1]}}</a></li>


                                        @endforeach


                                        </ul>
                                        </td>

                                        </tr>
                                        @endif



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