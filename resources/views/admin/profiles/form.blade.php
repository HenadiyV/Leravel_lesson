@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading">Create new profile</div>
                    @else
                        <div class="panel-heading">Edit profile</div>
                    @endif
                    <div class="panel-body">
                        <form action="@if(empty($entity)){{ route('profiles.store') }}@else{{ route('profiles.update', $entity->id) }}@endif" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="row">
                                @include('admin.fields.text', ['field' => 'name', 'name' => 'Name'])

                            </div>
                            <input type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection