@extends('admin.fields.main')

@section('field')
    <select name="{{ $field }}" class="form-control">
        @foreach($options as $option)
            <option value="{{ $option->id }}" @if((isset($entity) && $entity->$field == $option->id) || old($field) == $option->id) selected @endif>{{ $option->name_room }}</option>
        @endforeach
    </select>
@overwrite
