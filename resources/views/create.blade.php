@extends('layouts.app')
@section('content')

<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<center><h1>Create Blog</h1></center>
<br>

<form action="/create-blogs/success" method="post">
    @csrf
<div>Title</div>
<input type="text" placeholder="Enter Title" name="title">

<div>Body</div>
<textarea name="body" id="umair" placeholder="Enter Body" cols="50" rows="7"></textarea>
<br>
<button type="submit">Insert</button>
</form>

<script>
    CKEDITOR.replace("umair");
</script>

@endsection