@extends('admin.fields.main')

@section('field')
    <select name="{{ $field }} " hidden="hidden" class="form-control">
        @foreach($options as $option)
            <option value="{{ $option->id}}" @if((isset($entity) && $entity->$field == $option->id) || old($field) == $option->id) selected @endif>{{ $option->time}}</option>
        @endforeach
    </select>
@overwrite