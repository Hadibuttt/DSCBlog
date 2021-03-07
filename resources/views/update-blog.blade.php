@extends('layouts.app')
@section('content')

<center><h1>Update Blog</h1></center>
<br>

<form action="/update-blog/{{$blog->id}}/updated" method="post">
    @csrf
<div>Title</div>
<input type="text" placeholder="Enter Title" name="title" value="{{$blog->title}}">

<div>Body</div>
<textarea name="body" id="" placeholder="Enter Body" cols="50" rows="7">{{$blog->body}}</textarea>
<br>
<button type="submit">Update</button>
</form>

@endsection