@extends('layouts.app')

@section('content')
<form action="{{ route('processEditBlog', $blog->id) }}" method="POST">
    @csrf
    <input type="text" name="blog_title" id="blog_title" placeholder="Blog Title" value="{{ $blog->title }}"></br>
    <textarea type="text" name="blog_content" id="blog_content" placeholder="Blog Content" rows="4">{{ $blog->content }}</textarea></br>
    <input type="submit" value="Submit">
</form>
@endsection