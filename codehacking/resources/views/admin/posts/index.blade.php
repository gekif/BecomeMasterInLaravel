@extends('layouts.admin')

@section('content')


@if(count($posts) > 0)

<h1>Posts</h1>

<table class="table">
   <thead>
     <tr>
         <th>Id</th>
         <th>Photo</th>
         <th>Owner</th>
         <th>Category</th>
         <th>Title</th>
         <th>body</th>
         <th>Post link</th>
         <th>Comments</th>
         <th>Created at</th>
         <th>Update</th>
    </thead>
    <tbody>


    @foreach($posts as $post)
      <tr>
          <td>{{$post->id}}</td>
          <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400' }} " alt=""></td>
          <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
          <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
          <td>{{$post->title}}</td>
          <td>{{str_limit($post->body, 30)}}</td>
          <td><a href="{{route('home.post', $post->slug)}}">View Post</a></td>
          <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
          <td>{{$post->created_at->diffForhumans()}}</td>
          <td>{{$post->updated_at->diffForhumans()}}</td>
      </tr>
    @endforeach

   </tbody>
 </table>

@else
    <h1 class="text-center">No Posts</h1>
@endif

<div class="row">
    <div class="col-sm-6 col-sm-offset-5">
        {{$posts->render()}}
    </div>
</div>

@stop