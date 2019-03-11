@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row pull-right">

        </div>
        <div class="row">

            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading">schedules</div>
                    <div class="panel-body">
                        @if($schedules->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                    <th>Id_doctor</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($schedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->id }}</td>
                                        <td>{{ $schedule->day }}</td>
                                        <td>{{ $schedule->time }}</td>
                                        <td>{{ $schedule->id_doctor}}</td>
                                        <td>
                                            <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('schedules.edit', $schedule->id) }}">edit</a>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
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
@endsection