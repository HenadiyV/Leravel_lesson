@extends('adminlte::page')

@section('content')
    {{--<script src="http://code.jquery.com/jquery-latest.js"></script>--}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading">Create new schedule</div>
                    @else
                        <div class="panel-heading">Edit schedule</div>
                    @endif
                    <div class="panel-body">
                        {{--@yield('content_event')col-md-offset-2--}}

                        <form action="{{ route('schedulesUpdate', $entity->id) }}" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            {{--<input type="hidden" name="id" value="{{$entity->id}}">--}}
                            <div class="row">
                                {{--<div class="form-group">--}}

                                {{--</div>--}}
                                {{--@isset($date)<h2>{{$date}}</h2>--}}
                                {{--@endisset--}}

                                {{--<div class="row">--}}

                                <div class="col-md-12">
                                    <div class="col-md-3"><span><b>{{$doctors['surname']}}</b></span></div>
                                    <div class="col-md-3"><span><b>{{$doctors['name']}}</b></span></div>
                                    <div class="col-md-3"><span><b>{{$doctors['patronymic']}}</b></span></div>
                                    <div class="col-md-3"><span><b>{{$doctors['id_profile']}}</b></span></div>
                                    <br/>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-2"><span>День</span></div>
                                    <div class="col-md-2"><span>Рабочий</span></div>
                                    <div class="col-md-2"><span>Выходной</span></div>

                                    <div class="col-md-3"><span>Начало работы</span></div>
                                    <div class="col-md-3"><span>Завершение работы</span></div>

                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-2">

                                        <label for="scales">Понедельник</label>

                                    </div>
                                    <div class="col-md-2 " >
                                        @if($entity['monday']=='рабочий')
                                            <?php $mon=1?>
                                        @else
                                            <?php $mon=0?>
                                        @endif
                                            <input type="radio" name="monday" class="my_monday_select" @if($mon==1) checked="checked" @endif  value="1"  ><br/>

                                    </div>
                                    <div class="col-md-2 " >

                                        <input type="radio" name="monday" class="my_monday_select" @if($mon==0) checked ="checked" @endif  value="0"><br/>

                                    </div>

                                    <div class="monday_select">

                                        <div class="col-md-3">

                                            <select name="id_startMonday">
                                                @foreach($time as $tim)
                                                    @if($entity['id_startMonday']==$tim['id'])
                                                        <option value="{{$tim['id']}}"
                                                                selected>{{$tim['time']}}</option>
                                                    @else
                                                        <option value="{{$tim['id']}}">{{$tim['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-3 ">

                                            <select name="id_stopMonday">
                                                @foreach($stop as $stp)
                                                    @if($entity['id_stopMonday']==$stp['id'])
                                                        <option value="{{$stp['id']}}"
                                                                selected="selected">{{$stp['time']}}</option>
                                                    @else
                                                        <option value="{{$stp['id']}}">{{$stp['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <label for="scales">Вторник</label>
                                    </div>
                                    <div class="col-md-2 " >
                                        @if($entity['tuesday']=='рабочий')
                                            <?php $tue=1?>
                                        @else
                                            <?php $tue=0?>
                                        @endif
                                            <input type="radio" name="tuesday" class="my_tuesday_select" @if($tue==1) checked @endif  value="1"  ><br/>

                                    </div>
                                    <div class="col-md-2 " >

                                        <input type="radio" name="tuesday" class="my_tuesday_select"  value="0" @if($tue==0) checked @endif ><br/>

                                    </div>
                                    <div class="tuesday_select">
                                        <div class="col-md-3  ">

                                            <select name="id_startTuesday">

                                                @foreach($time as $tim)
                                                    @if($entity['id_startTuesday']==$tim['id'])
                                                        <option value="{{$tim['id']}}"
                                                                selected="selected">{{$tim['time']}}</option>
                                                    @else
                                                        <option value="{{$tim['id']}}">{{$tim['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">

                                            <select name="id_stopTuesday">
                                                @foreach($stop as $stp)
                                                    @if($entity['id_stopTuesday']==$stp['id'])
                                                        <option value="{{$stp['id']}}"
                                                                selected="selected">{{$stp['time']}}</option>
                                                    @else
                                                        <option value="{{$stp['id']}}">{{$stp['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <label for="scales">Среда</label>
                                    </div>
                                    <div class="col-md-2 " >
                                        @if($entity['wednesday']=='рабочий')
                                            <?php $wed=1?>
                                        @else
                                            <?php $wed=0?>
                                        @endif
                                            <input type="radio" name="wednesday" class="my_wednesday_select" @if($wed==1) checked @endif  value="1"  ><br/>

                                    </div>
                                    <div class="col-md-2 " >

                                        <input type="radio" name="wednesday" class="my_wednesday_select"  value="0" @if($wed==0) checked @endif ><br/>

                                    </div>

                                    <div class=" wednesday_select">
                                        <div class="col-md-3">

                                            <select name="id_startWednesday">
                                                @foreach($time as $tim)
                                                    @if($entity['id_startWednesday']==$tim['id'])
                                                        <option value="{{$tim['id']}}"
                                                                selected="selected">{{$tim['time']}}</option>
                                                    @else
                                                        <option value="{{$tim['id']}}">{{$tim['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">

                                            <select name="id_stopWednesday">
                                                @foreach($stop as $stp)
                                                    @if($entity['id_stopWednesday']==$stp['id'])
                                                        <option value="{{$stp['id']}}"
                                                                selected="selected">{{$stp['time']}}</option>
                                                    @else
                                                        <option value="{{$stp['id']}}">{{$stp['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <label for="scales">Четверг</label>
                                    </div>
                                    <div class="col-md-2 " >
                                        @if($entity['thursday']=='рабочий')
                                            <?php $thu=1?>
                                        @else
                                            <?php $thu=0?>
                                        @endif
                                        <input type="radio" name="thursday" class="my_thursday_select" @if($thu==1) checked @endif  value="1"  ><br/>

                                </div>
                                <div class="col-md-2 " >

                                    <input type="radio" name="thursday" class="my_thursday_select"  value="0" @if($thu==0) checked @endif ><br/>

                                </div>

                                    <div class="thursday_select">
                                        <div class="col-md-3 ">

                                            <select name="id_startThursday">
                                                @foreach($time as $tim)
                                                    @if($entity['id_startThursday']==$tim['id'])
                                                        <option value="{{$tim['id']}}"
                                                                selected="selected">{{$tim['time']}}</option>
                                                    @else
                                                        <option value="{{$tim['id']}}">{{$tim['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 ">

                                            <select name="id_stopThursday">
                                                @foreach($stop as $stp)
                                                    @if($entity['id_stopThursday']==$stp['id'])
                                                        <option value="{{$stp['id']}}"
                                                                selected="selected">{{$stp['time']}}</option>
                                                    @else
                                                        <option value="{{$stp['id']}}">{{$stp['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <label for="scales">Пятница</label>
                                    </div>
                                    <div class="col-md-2 " >
                                        @if($entity['friday']=='рабочий')
                                            <?php $fri=1?>
                                        @else
                                            <?php $fri=0?>
                                        @endif
                                        <input type="radio" name="friday" class="my_friday_select" @if($fri==1) checked @endif  value="1"  ><br/>

                                </div>
                                <div class="col-md-2 " >

                                    <input type="radio" name="friday" class="my_friday_select"  value="0" @if($fri==0) checked @endif><br/>

                                </div>
                                    <div class="friday_select">
                                        <div class="col-md-3 ">

                                            <select name="id_startFriday">
                                                @foreach($time as $tim)
                                                    @if($entity['id_startFriday']==$tim['id'])
                                                        <option value="{{$tim['id']}}"
                                                                selected="selected">{{$tim['time']}}</option>
                                                    @else
                                                        <option value="{{$tim['id']}}">{{$tim['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 ">

                                            <select name="id_stopFriday">
                                                @foreach($stop as $stp)
                                                    @if($entity['id_stopFriday']==$stp['id'])
                                                        <option value="{{$stp['id']}}"
                                                                selected="selected">{{$stp['time']}}</option>
                                                    @else
                                                        <option value="{{$stp['id']}}">{{$stp['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <label for="scales">Суббота</label>
                                    </div>
                                    <div class="col-md-2 " >
                                        @if($entity['saturday']=='рабочий')
                                        <?php $sat=1?>
                                        @else
                                            <?php $sat=0?>
                                        @endif
                                            <input type="radio" name="saturday" class="my_saturday_select" @if($sat==1) checked @endif value="1" ><br/>

                                    </div>
                                    <div class="col-md-2 " >

                                        <input type="radio" name="saturday" class="my_saturday_select"  value="0"  @if($sat==0) checked @endif><br/>

                                    </div>


                                    <div class=" saturday_select">
                                        <div class="col-md-3 ">

                                            <select name="id_startSaturday">
                                                @foreach($time as $tim)
                                                    @if($entity['id_startSaturday']==$tim['id'])
                                                        <option value="{{$tim['id']}}"
                                                                selected="selected">{{$tim['time']}}</option>
                                                    @else
                                                        <option value="{{$tim['id']}}">{{$tim['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 ">

                                            <select name="id_stopSaturday">
                                                @foreach($stop as $stp)
                                                    @if($entity['id_stopSaturday']==$stp['id'])
                                                        <option value="{{$stp['id']}}"
                                                                selected="selected">{{$stp['time']}}</option>
                                                    @else
                                                        <option value="{{$stp['id']}}">{{$stp['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <label for="scales">Воскресенье</label>
                                    </div>
                                    <div class="col-md-2 " >
@if($entity['sunday']=='рабочий')
    <?php $sun=1?>
    @else
                                            <?php $sun=0?>
    @endif

                                            <input type="radio" name="sunday" class="my_sunday_select" @if($sun==1) checked @endif value="1"  ><br/>

                                    </div>
                                            <div class="col-md-2 " >

                                            <input type="radio" name="sunday" class="my_sunday_select"  value="0" @if($sun==0) checked @endif><br/>

                                    </div>
                                    <div class="sunday_select">
                                        <div class="col-md-3 ">

                                            <select name="id_startSunday">
                                                @foreach($time as $tim)
                                                    @if($entity['id_startSunday']==$tim['id'])
                                                        <option value="{{$tim['id']}}"
                                                                selected="selected">{{$tim['time']}}</option> @else
                                                        <option value="{{$tim['id']}}">{{$tim['time']}}</option>
                                                    @endif

                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 ">

                                            <select name="id_stopSunday">
                                                @foreach($stop as $stp)
                                                    @if($entity['id_stopSunday']==$stp['id'])
                                                        <option value="{{$stp['id']}}"
                                                                selected="selected">{{$stp['time']}}</option>
                                                    @else
                                                        <option value="{{$stp['id']}}">{{$stp['time']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <label for="scales">Работает</label>
                                    </div>

                                        <div class="col-md-2 " >
                                            @if($entity['status']==1)
                                                <?php $st=1?>
                                            @else
                                                <?php $st=0?>
                                            @endif
                                                <input type="radio" name="status" class="my_sunday_select" @if($st==1) checked value="1" @endif    >

                                        </div>
                                        <div class="col-md-2 " >

                                            <input type="radio" name="status" class="my_sunday_select"   @if($st==0) checked   value="0" @endif  >

                                        </div>
                                    <div class="col-md-6"></div>
                                    </div>

                                </div>
<div>
    <input type="hidden" name="mon" value="Monday">
    <input type="hidden" name="mon" value="Tuesday">
    <input type="hidden" name="mon" value="Wednesday">
    <input type="hidden" name="mon" value="Thursday">
    <input type="hidden" name="mon" value="Friday">
    <input type="hidden" name="mon" value="Saturday">
    <input type="hidden" name="mon" value="Sunday">

</div>

                            {{--<input type="text" name="id_doctor" value="{{$doctors->surname}}">--}}
                            {{--@include('admin.fields.text', ['field' => 'profile', 'name' => 'Profile'])--}}
                            {{--@include('admin.fields.select_doctor', ['field' => 'id_doctor', 'name' => 'Doctor','options'=>$doctors])--}}
                            {{--@yield('content_event')--}}

                            {{--</div>--}}
                            <input type="submit" name="update" value="save">
                        </form>
                        {{--  @include('admin.calendar.event')--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<script>--}}

    {{--$(document).ready(function(){--}}
    {{--$(".monday_select").hide();--}}
    {{--$(".tuesday_select").hide();--}}
    {{--$(".wednesday_select").hide();--}}
    {{--$(".thursday_select").hide();--}}
    {{--$(".friday_select").hide();--}}
    {{--$(".saturday_select").hide();--}}
    {{--$(".sunday_select").hide();--}}
    {{--$(".my_monday_select").click(function(){--}}

    {{--$(".monday_select").slideToggle();--}}
    {{--});--}}
    {{--$(".my_tuesday_select").click(function(){--}}

    {{--$(".tuesday_select").slideToggle();--}}
    {{--});--}}
    {{--$(".my_wednesday_select").click(function(){--}}

    {{--$(".wednesday_select").slideToggle();--}}
    {{--});--}}
    {{--$(".my_thursday_select").click(function(){--}}

    {{--$(".thursday_select").slideToggle();--}}
    {{--});--}}
    {{--$(".my_friday_select").click(function(){--}}

    {{--$(".friday_select").slideToggle();--}}
    {{--});--}}
    {{--$(".my_saturday_select").click(function(){--}}

    {{--$(".saturday_select").slideToggle();--}}
    {{--});--}}
    {{--$(".my_sunday_select").click(function(){--}}

    {{--$(".sunday_select").slideToggle();--}}
    {{--});--}}


    {{--});--}}
    {{--</script>--}}
@endsection