@extends('layouts.app')

@section('content')
<form action="{{ route('processCreateBlog') }}" method="POST">
    @csrf
    <input type="text" name="blog_title" placeholder="Blog Title"></br>
    <textarea type="text" name="blog_content" placeholder="Blog Content" rows="4"></textarea></br>
    <input type="submit" value="Submit">
</form>
@endsection