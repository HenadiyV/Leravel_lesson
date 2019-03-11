@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row pull-right">

        </div>
        <div class="row">

            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>
                    <div class="panel-body">
                        @if($profiles->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($profiles as $profile)
                                    <tr>
                                        <td>{{ $profile->id }}</td>
                                        <td>{{ $profile->name }}</td>

                                        <td>
                                            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('profiles.edit', $profile->id) }}">edit</a>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            No profiles
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-md-2">
                <a type="button" class="btn btn-block btn-success btn-lg" href="{{route('profiles.create')}}">Success</a>
            </div>
        </div>
    </div>
@endsection