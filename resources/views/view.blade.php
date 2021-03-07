@extends('layouts.app')
@section('content')

<center><h1>DSCBlogs</h1></center>
<br>

@foreach ($blogs as $blog)
<h3>{!!$blog->title!!}</h3><a href="/update-blog/{{$blog->id}}">Update</a> | <a href="/delete-blog/{{$blog->id}}">Delete</a>
<h3>{!!$blog->body!!}</h3>
@endforeach


@endsection