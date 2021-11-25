@extends('layouts.main')
@section('content')
<div>
  
    <div>
        {{$phone->id}}.{{$phone->model}} {{$phone->producer}}
    </div>
    <div>
        <a href="{{route('phone.edit', $phone->id)}}">Edit</a>
    </div>
    <div>
        <form action="{{route('phone.delete', $phone->id)}}" method="post">
            @csrf
            @method('delete')
        <input type="submit" value="Delete">
        </form>
    </div>
    <div>
    <a href="{{route('phone.index')}}">Back</a>
    </div>

</div>