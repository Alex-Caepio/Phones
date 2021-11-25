@extends('layouts.main')
@section('content')
<div>
   <div>
       <a href="{{route('phone.create')}}" class="btn btn-primary mb-3">Add another phone</a>
   </div>
    @foreach($phones as $phone)
    <div>
       <a href = "{{route('phone.show', $phone->id)}}">{{$phone->id}}.{{$phone->model}} {{$phone->producer}} {{$phone->price}}</a>
    </div>
    @endforeach
</div>

@endsection