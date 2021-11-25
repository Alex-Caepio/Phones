@extends('layouts.main')
@section('content')
<form action="{{route('phone.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="model">Model</label>
    <input type="model" name="model" class="form-control" id="model" placeholder="model">
    </div>

  <label for="producer">Producer</label>
    <textarea name="producer" class="form-control" id="producer" placeholder="producer"></textarea>
    </div>


  <label for="price">Price</label>
    <input type="text" name="price" class="form-control" id="price" placeholder="price">
    </div>

  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection