@extends('layouts.app')


@section('content')

    <form action="/posts" method="post">



        <input type="text" name="title" placeholder="Enter Title">

        {{ csrf_field() }}

        <input type="submit" name="submit">

    </form>

@endsection



@yield('footer')