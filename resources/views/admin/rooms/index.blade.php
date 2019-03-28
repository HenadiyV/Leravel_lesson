@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row pull-right">

        </div>
        <div class="row">

            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Rooms</div>
                    <div class="panel-body">
                        @if($rooms->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Номер кабинета</th>
                                    <th>Действие</th>
                                </tr>
                                @foreach($rooms as $room)
                                    <tr>
                                        <td>{{ $room->id }}</td>
                                        <td>{{ $room->name_room }}</td>

                                        <td>
                                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('rooms.edit', $room->id) }}">edit</a>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            No rooms
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-md-2">
                <a type="button" class="btn btn-block btn-success btn-lg" href="{{route('rooms.create')}}">Success</a>
            </div>
        </div>
    </div>
@endsection