@extends('layouts.app')

@section('content')
<h2>{{ $blog->title }}</h2></br>
<p>{{ $blog->content }}</p>
@endsection