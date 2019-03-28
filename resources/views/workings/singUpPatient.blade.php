@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">


                    <div class="panel-body">
                        <form action="{{ route('saveq')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{--@isset($doc)--}}
                            {{--{{ method_field('PUT') }}--}}
                            {{--@endisset--}}
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="col-md-4"><label for="scales">Доктор </label>
                                        <?php $sched=$schedule['doctor'] ?>
                                    </div>
                                    <div class="col-md-4">
                                        <span style="color:blue"> {{$sched}}</span>
                                    </div>
                                    <div class="col-md-4">

                                    <input type="hidden" name="doctor" value="{{$sched}}"><br/>
                                </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="scales">Профиль</label>
                                        <?php $profil= $profile->id_profile ?>
                                        <?php $id_doctor= $schedule['id_doctor'] ?>
                                    <div class="col-md-4">
                                        <span  style="color:blue">{{$profil}}</span>
                                    </div>
                                    </div>

                                        <input type="hidden" name="profile" value="{{$profil}}"><br/>
                                   <input type="hidden" name="id_doctor" value="{{$id_doctor}}"><br/>
                                        {{--<div class="col-md-4"> </div>--}}


                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="scales">Время записи</label>
                                    </div>
                                    <div class="col-md-4">
                                        <span  style="color:blue">{{$time[1]}}</span>

                                    </div>
                                        <input type="hidden" name="time" value="{{$time[1]}}"><br/>
                                    <input type="hidden" name="id_time" value="{{$time[0]}}"><br/>

                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="scales">Дата записи</label>
                                    </div>
                                    <div class="col-md-4">
                                       <span style="color:blue"> {{$data}}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="hidden"  name="data" value="{{$data}}"><br/>
                                    </div>

                                </div>
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <label for="scales">Кабинет</label>
                                           <?php $room= $profile->id_room ?>
                                        </div>
                                        <div class="col-md-4">
                                           <span style="color:blue">{{$room}}</span>
                                        </div>

                                            <input type="hidden" name="id_room" value="{{$room}}"><br/>
                                            {{--<div class="col-md-4">  </div>--}}

                                    </div>
                            </div>
                            <input type="submit" value="Записаться">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection