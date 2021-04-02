@extends('layouts.app')

@section('content')
<table>
<th>
    <td>Blog Title</td>
    <td>Date</td>
</th>
@foreach($blogs as $blog)
<tr>
    <td>{{ $blog->title }}</td>
    <td>{{ $blog->created_at }}</td>
</tr>
@endforeach
</table>

@endsection