@extends('layouts.admin')

@section('content')


@if (count($comments) > 0)

<h1>Comments</h1>

<table class="table">
    <thead>
    <tr>
        <th>No</th>
        <th>Author</th>
        <th>Email</th>
        <th>Body</th>
        <th>Detail</th>
    </tr>
    </thead>
    <tbody>

    @php $i = 1 @endphp
    @foreach ($comments as $comment)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $comment->author }}</td>
        <td>{{ $comment->email }}</td>
        <td>{{ $comment->body }}</td>
        <td><a href="{{ route('home.post', $comment->post->id) }}">View Post </a></td>
    </tr>
    @endforeach

    </tbody>
</table>

@else
    <h1 class="text-center">No Comments</h1>


@endif

@stop