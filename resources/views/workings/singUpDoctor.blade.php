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
                                                            <?php $mn=$md[1]?>
                                                            <?php $mn_day=$md[1]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach
                                                    <?php $mn_day_go=false ?>
                                                    @foreach($temp_patient as $p)

                                                        @if($p[1] ==$mn_day)

                                                            <?php $mn_day_go=true ?>

                                                        @endif
                                                    @endforeach
                                                    <ul class="my_ul">

                                                            @if($mn_day_go)
                                                            <?php $mn_go=true?>
                                                                @foreach($temp_patient as $sch)


                                                                        {{--{{$mn}}--}}
                                                                    {{--{{$sch[2]}}--}}
                                                                        @if($mn==$sch[1] )
                                                                        {{--{{$sch[1]}}--}}
                                                                    @for($i=$schedule->id_startMonday;$i<$schedule->id_stopMonday;$i++)

@if($i!=$sch[2])
                                                                        <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'data' => $mn,
                                                   'id_time'=>$i,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>


                                                                    @endif
                                                                @endfor
                                                                        @endif


                                                                        {{--@if( $mn_go)    @endif--}}
                                                                @endforeach
                                                        @else
                                                            @for($i=$schedule->id_startMonday;$i<$schedule->id_stopMonday;$i++)
                                                                <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $mn,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                            @endfor
                                                            @endif


                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->tuesday=='рабочий')
                                                <th>Вторник</th>
                                                <td class="my">@foreach($mydate as $md)

                                                        @if($schedule->tues ==$md[0])
                                                            <?php $tu=$md[1]?>
                                                            <?php $tu_day=$md[0]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach
                                                    <?php $tu_day_go=false ?>
                                                    @foreach($temp_patient as $p)

                                                        @if($p[0] ==$tu_day)
                                                            <?php $tu_day_go=true ?>

                                                        @endif
                                                    @endforeach
                                                    <ul class="my_ul">

                                                            @if($tu_day_go)
                                                                <?php $tu_go=true?>
                                                                @foreach($temp_patient as $sch)
                                                                        @if( $tu_go)
                                                                @if($tu==$sch[1] )
                                                                    @for($i=$schedule->id_startTuesday;$i<$schedule->id_stopTuesday;$i++)
                                                                    @if($i!=$sch[2])
                                                       <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $tu,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>


                             @endif
                                                                @endfor
                                                               @endif

                                                                        @endif
                                                                @endforeach
                                                        @else
                                                            @for($i=$schedule->id_startTuesday;$i<$schedule->id_stopTuesday;$i++)

                                                                <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $tu,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>

                                                            @endfor
                                                            @endif

                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->wednesday=='рабочий')
                                                <th>Среда</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->wednes==$md[0])
                                                            <?php $we=$md[1]?>
                                                            <?php $we_day=$md[0]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach
                                                    <?php $we_day_go=false?>
                                                    @foreach($temp_patient as $p)

                                                        @if($p[0] ==$we_day)
                                                            <?php $we_day_go=true ?>

                                                        @endif
                                                    @endforeach

{{--{{$temp_patient[0]}}--}}
                                                    <ul class="my_ul">
                                                        @if($we_day_go)
                                                            <?php $we_go=true?>
                                                            @foreach($temp_patient as $sch)
                                                                @if($we_go)
                                                                @if($we==$sch[1])
                                   @for($i=$schedule->id_startWednesday;$i<$schedule->id_stopWednesday;$i++)
                                                                        @if($i!=$sch[2])
                                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $we,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                                            <?php $we_go=false ?>

                                                                        @endif

                                                                    @endfor
                                                                @endif

                                                                    @endif
                                                            @endforeach
                                                        @else
                                                            @for($i=$schedule->id_startWednesday;$i<$schedule->id_stopWednesday;$i++)

                                                                <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $we,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                                <?php $we_go=false ?>
                                                            @endfor
                                                        @endif
                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>


                                            @if($schedule->thursday=='рабочий')

                                                <th>Четверг</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->thurs ==$md[0])
                                                            <?php $th=$md[1]?>
                                                            <?php $th_day=$md[0]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach

                                                    <?php $th_day_go=false?>
                                                    @foreach($temp_patient as $p)

                                                        @if($p[0] ==$th_day)
                                                            <?php $th_day_go=true ?>

                                                        @endif
                                                    @endforeach
                                                    <ul class="my_ul">
                                                        @if($th_day_go)
                                                            <?php $th_go=true?>
                                                            @foreach($temp_patient as $sch)
                                                                @if($th_go)
                                                                @if($th==$sch[1])
                                        @for($i=$schedule->id_startThursday;$i<$schedule->id_stopThursday;$i++)
                                                                        @if( $i!=$sch[2])
                                                                            <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $th,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                                            <?php $th_go=false ?>


                                                                        @endif

                                                                    @endfor


                                                                            <?php $th_go=false ?>
                                                                    @endif
                                                                    @endif
                                                            @endforeach
                                                        @else
                                                            @for($i=$schedule->id_startThursday;$i<$schedule->id_stopThursday;$i++)
                                                                <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $th,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                            @endfor
                                                        @endif
                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>

                                            @if($schedule->friday=='рабочий')

                                                <th>Пятница</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->fri ==$md[0])
                                                            <?php $fr=$md[1]?>
                                                            <?php $fr_day=$md[0]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach
                                                    <?php $fr_day_go=false?>
                                                    @foreach($temp_patient as $p)

                                                        @if($p[0] ==$fr_day)
                                                            <?php $fr_day_go=true ?>

                                                        @endif
                                                    @endforeach
                                                    <ul class="my_ul">

                                           @if( $fr_day_go)
                                               <?php $fr_go=true?>
                                                  @foreach($temp_patient as $sch)
                                                       @if($fr_go)
                                                           @if($fr==$sch[1])
                                                      @for($i=$schedule->id_startFriday;$i<$schedule->id_stopFriday;$i++)
                                                             @if( $i!=$sch[2])
                                                                  <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $fr,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                                            <?php $fr_go=false ?>
                                                                        @endif
                                                                    @endfor
                                                                @endif
                                                                    @endif
                                                            @endforeach
                                                        @else
                                                   @for($i=$schedule->id_startFriday;$i<$schedule->id_stopFriday;$i++)

                                                                    <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $fr,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                                    <?php $fr_go=false ?>

                                                            @endfor

                                                        @endif
                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->saturday=='рабочий')

                                                <th>Суббота</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->satur ==$md[0])
                                                            <?php $sa=$md[1]?>
                                                            <?php $sa_day=$md[0]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach
                                                    <?php $sa_day_go=false?>
                                                    @foreach($temp_patient as $p)

                                                        @if($p[0] ==$sa_day)
                                                            <?php $sa_day_go=true ?>

                                                        @endif
                                                    @endforeach

                                                    <ul class="my_ul">
                                                        @if($sa_day_go)
                                                            <?php $sa_go=true?>
                                                            @foreach($temp_patient as $sch)
                                                                    @if($sa_go)
                                                                @if($sa==$sch[1])
                                           @for($i=$schedule->id_startSaturday;$i<$schedule->id_stopSaturday;$i++)
                                                                        @if($i!=$sch[2])
                                                                                <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $sa,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                                            <?php $sa_go=false ?>

                                                                        @endif

                                                                    @endfor
                                                                @endif

                                                                    @endif
                                                            @endforeach
                                                        @else
                                                            @for($i=$schedule->id_startSaturday;$i<$schedule->id_stopSaturday;$i++)

                                                                    <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $sa,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                                    <?php $sa_go=false ?>


                                                            @endfor
                                                        @endif


                                                    </ul>
                                                </td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($schedule->sunday=='рабочий')

                                                <th>Воскресенье</th>
                                                <td class="my"> @foreach($mydate as $md)

                                                        @if($schedule->sun ==$md[0])
                                                            <?php $su=$md[1]?>
                                                            <?php $su_day=$md[0]?>
                                                            {{$md[1]}}
                                                        @endif
                                                    @endforeach
                                                    <?php $su_day_go=false?>
                                                    @foreach($temp_patient as $p)

                                                        @if($p[0] ==$su_day)
                                                            <?php $su_day_go=true ?>

                                                        @endif
                                                    @endforeach

                                                    <ul class="my_ul">
                                                        @if($su_day_go)
                                                            <?php $su_go=true?>
                                                            @foreach($temp_patient as $sch)
                                                                @if($sa==$sch[1])
                                            @for($i=$schedule->id_startSunday;$i<$schedule->id_stopSunday;$i++)
                                                                        @if($i!=$sch[2])
                                                                                <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $su,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                                            <?php $su_go=false ?>

                                                                        @endif

                                                                    @endfor
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            @for($i=$schedule->id_startSunday;$i<$schedule->id_stopSunday;$i++)

                                                                    <li><a type="button" class="btn btn-default" href="{{ route('singUPq', [
                                                   'time' => $time[$i],
                                                   'id_time'=>$i,
                                                   'data' => $su,
                                                   'schedule' => $schedule->id_doctor]) }}">{{ $time[$i] }}</a></li>
                                                                    <?php $su_go=false ?>


                                                            @endfor
                                                        @endif
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