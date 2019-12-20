@extends('layouts.app')


@section('content')

    <h1>Create Post</h1>

    <form action="/posts" method="post">

        {{ csrf_field() }}

        <input type="text" name="title" placeholder="Enter Title">

        <input type="submit" name="submit">

    </form>

@endsection


