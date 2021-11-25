@extends('layouts.main')
@section('content')
<form action="{{route('phone.update', $phone->id)}}" method="post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="model">Model</label>
    <input type="model" name="model" class="form-control" id="model" placeholder="model" value="{{$phone->model}}">
    </div>

  <label for="producer">Producer</label>
    <textarea name="producer" class="form-control" id="producer" placeholder="producer">{{$phone->producer}}</textarea>
    </div>


  <label for="price">Price</label>
    <input type="text" name="price" class="form-control" id="price" placeholder="price" value="{{$phone->price}}">
    </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection