@extends('layouts.app')


@section('content')

    <h1>Edit Post</h1>

    <form action="/posts/{{$post->id}}" method="post">

        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PUT">

        <input type="text" name="title" placeholder="Enter Title" value="{{ $post->title }}">

        <input type="submit" name="submit">

    </form>

@endsection


