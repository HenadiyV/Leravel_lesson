@extends('adminlte::page')

@section('content')
    <script src="http://code.jquery.com/jquery-latest.js"></script>
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


                        <form action="@if(empty($entity)){{ route('schedules.store') }}@else{{ route('schedules.update', $entity->id) }}@endif" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="row">
                                <div class="form-group">

                                </div>
        @isset($date)<h2>{{$date}}</h2>
                                @endisset
                                {{--@include('admin.fields.my_calendar',[])--}}
                                {{--@include('admin.fields.date', ['field' => 'day', 'name' => 'Day'])--}}
                                                              {{--@include('admin.fields.checkbox', ['field' => 'day', 'name' => 'Day'])--}}


  <div class="row">

      <div class="col-md-12">
          <div class="col-md-3"><span>День</span></div>
          <div class="col-md-3"><span>Начало работы</span></div>
          <div class="col-md-6"><span>Завершение работы</span></div>
      </div>

      <div class="col-md-12">
        <div class="col-md-2">
          <label for="scales">Понедельник</label>
        </div>

          <div class="col-md-1 ">

              <input type="radio" name="monday" class="my_monday_select" value="1"> <br/>

             </div>
        <div class="monday_select">
          <div class="col-md-3  ">

              <select name="id_startMonday">
                  @foreach($time as $tim)
                      <option value="{{$tim->id}}">{{$tim->time}}</option>
                      @endforeach
              </select>
          </div>
          <div class="col-md-3 " >

              <select name="id_stopMonday">
                  @foreach($stop as $stp)
                      <option value="{{$stp->id}}">{{$stp->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3"></div>
      </div>
                  {{--<div class="my_schedule_select"> </div>--}}
      </div>

      <div class="col-md-12">
           <div class="col-md-2">
               <label for="scales">Вторник</label>
                </div>
            <div class="col-md-1 ">
                 <input type="radio" name="tuesday" class="my_tuesday_select" value="1"><br/>
                </div>
          <div class="tuesday_select">
          <div class="col-md-3  ">

              <select name="id_startTuesday">
                  @foreach($time as $tim)
                      <option value="{{$tim->id}}">{{$tim->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3">

              <select name="id_stopTuesday">
                  @foreach($stop as $stp)
                      <option value="{{$stp->id}}">{{$stp->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3"></div>
          </div>
      </div>

      <div class="col-md-12">
          <div class="col-md-2">
              <label for="scales">Среда</label>
          </div>
          <div class="col-md-1">
              <input type="radio" name="wednesday" class=" my_wednesday_select" value="1"><br/>
          </div>
          <div class=" wednesday_select">
          <div class="col-md-3">

              <select name="id_startWednesday">
                  @foreach($time as $tim)
                      <option value="{{$tim->id}}">{{$tim->time}}</option>
              @endforeach
              </select>
          </div>
          <div class="col-md-3">

              <select name="id_stopWednesday">
                  @foreach($stop as $stp)
                      <option value="{{$stp->id}}">{{$stp->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3"></div>
          </div>
      </div>

      <div class="col-md-12">
          <div class="col-md-2">
              <label for="scales">Четверг</label>
          </div>
          <div class="col-md-1 ">
              <input type="radio" name="thursday" class="my_thursday_select" value="1"><br/>
          </div>
          <div class="thursday_select">
          <div class="col-md-3 ">

              <select name="id_startThursday">
                  @foreach($time as $tim)
                      <option value="{{$tim->id}}">{{$tim->time}}</option>
              @endforeach
              </select>
          </div>
          <div class="col-md-3 ">

              <select name="id_stopThursday">
                  @foreach($stop as $stp)
                      <option value="{{$stp->id}}">{{$stp->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3"></div>
          </div>
      </div>

      <div class="col-md-12">
          <div class="col-md-2">
              <label for="scales">Пятница</label>
          </div>
          <div class="col-md-1 ">
              <input type="radio" name="friday" class="my_friday_select"  value="1"><br/>
          </div>
          <div class="friday_select">
          <div class="col-md-3 ">

              <select name="id_startFriday">
                  @foreach($time as $tim)
                      <option value="{{$tim->id}}">{{$tim->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3 ">

              <select name="id_stopFriday">
                  @foreach($stop as $stp)
                      <option value="{{$stp->id}}">{{$stp->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3"></div>
          </div>
      </div>

      <div class="col-md-12">
          <div class="col-md-2">
              <label for="scales">Суббота</label>
          </div>
          <div class="col-md-1">
              <input type="radio" name="saturday" class=" my_saturday_select" value="1"><br/>
          </div>
          <div class=" saturday_select">
          <div class="col-md-3 ">

              <select name="id_startSaturday">
                  @foreach($time as $tim)
                      <option value="{{$tim->id}}">{{$tim->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3 ">

              <select name="id_stopSaturday">
                  @foreach($stop as $stp)
                      <option value="{{$stp->id}}">{{$stp->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3"></div>
              </div>
      </div>

      <div class="col-md-12">
          <div class="col-md-2">
              <label for="scales">Воскресенье</label>
          </div>
          <div class="col-md-1 ">
              <input type="radio" name="sunday" class="my_sunday_select" value="1"><br/>
          </div>
          <div class="sunday_select">
          <div class="col-md-3 ">

              <select name="id_startSunday">
                  @foreach($time as $tim)
                      <option value="{{$tim->id}}">{{$tim->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3 ">

              <select name="id_stopSunday">
                  @foreach($stop as $stp)
                      <option value="{{$stp->id}}">{{$stp->time}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3"></div>
          </div>
      </div>
      <div class="col-md-12">
      <div class="col-md-2">
          <label for="scales">Работает</label>
      </div>
      <div class="col-md-1">
          <input type="radio" name="status"  value="1"><br/>
      </div>
      </div>
       </div>
             <div class="col-md-12"  >
          @include('admin.fields.select_doctor', ['field' => 'id_doctor', 'name' => 'Доктор','options'=>$doctors])
                            </div>

                            </div>
                            <input type="submit" value="save">
                        </form>
                        {{--  @include('admin.calendar.event')--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function(){
           $(".monday_select").hide();
            $(".tuesday_select").hide();
            $(".wednesday_select").hide();
            $(".thursday_select").hide();
            $(".friday_select").hide();
            $(".saturday_select").hide();
           $(".sunday_select").hide();
            $(".my_monday_select").click(function(){

                 $(".monday_select").slideToggle();
            });
            $(".my_tuesday_select").click(function(){

                $(".tuesday_select").slideToggle();
            });
            $(".my_wednesday_select").click(function(){

                $(".wednesday_select").slideToggle();
            });
            $(".my_thursday_select").click(function(){

                $(".thursday_select").slideToggle();
            });
            $(".my_friday_select").click(function(){

                $(".friday_select").slideToggle();
            });
            $(".my_saturday_select").click(function(){

                $(".saturday_select").slideToggle();
            });
            $(".my_sunday_select").click(function(){

                $(".sunday_select").slideToggle();
            });


        });
    </script>
@endsection
{{--@include('admin.fields.select_schedules', ['field' => 'id_startThursday', 'name' => 'start_Thursday', 'options' => $time])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_stopThursday', 'name' => 'stop_Thursday', 'options' => $stop])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_startFriday', 'name' => 'start_Friday', 'options' => $time])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_startMonday', 'name' => 'id_start_Monday', 'options' => $time])--}}
{{--<input type="text" hidden="hidden" name="id_startMonday" value="">--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_stopMonday', 'name' => 'stop', 'options' => $stop])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_startTuesday', 'name' => 'start_Tuesday', 'options' => $time])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_stopTuesday', 'name' => 'stop_Tuesday', 'options' => $stop])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_startWednesday', 'name' => 'start_Wednesday', 'options' => $time])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_stopWednesday', 'name' => 'stop_Wednesday', 'options' => $stop])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_stopFriday', 'name' => 'stop_Friday', 'options' => $stop])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_startSaturday', 'name' =>'start_Saturday', 'options' => $time])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_stopSaturday', 'name' => 'stop_Saturday', 'options' => $stop])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_startSunday', 'name' => 'start_sunday', 'options' => $time])--}}
{{--@include('admin.fields.select_schedules', ['field' => 'id_stopSunday', 'name' => 'start_sunday', 'options' => $stop])--}}
{{--@include('admin.fields.text', ['field' => 'profile', 'name' => 'Profile'])--}}