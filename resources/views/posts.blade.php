@extends('layouts.app')
@section('title')
Home page
@endsection
@section('content')
<h1>Post page</h1>
<p>Hello</p>
@endsection
@section('aside')
@parent
<p>Additional text</p>
{{$name}}
<form action = "/post/create" method = "post">
@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="title">
    </div>

  <label for="post_content">Content</label>
    <textarea name="user_id" class="form-control" id="use_id" placeholder="user_id"></textarea>
    </div>


  <label for="image">Text</label>
    <input type="text" name="text" class="form-control" id="text" placeholder="text">
    </div>

  <button type="submit" class="btn btn-primary">Create</button>
  
</form>
@endsection

