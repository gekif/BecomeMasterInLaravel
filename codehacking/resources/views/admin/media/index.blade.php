@extends('layouts.admin')





@section('content')


    <h1>Media</h1>

    @if($photos)

        <form action="/delete/media" method="post" class="form-inline">
            <div class="form-group">
                <select name="checkBoxArray" id="">
                    <option value="delete">Delete</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>


        <table class="table">
            <thead>
            <tr>
                <th><input type="checkbox" id="options"></th>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
            </tr>
            </thead>
            <tbody>


            @foreach($photos as $photo)

                <tr>
                    <td><input type="checkbox" id="checkBoxArray[]" value="{{ $photo->id }}" class="checkBoxes"></td>
                    <td>{{$photo->id}}</td>
                    <td><img height="50" src="{{$photo->file}}" alt=""></td>
                    <td>{{$photo->created_at ? $photo->created_at : 'no date' }}</td>
                    <td>

                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMediasController@destroy', $photo->id]]) !!}


                             <div class="form-group">
                                 {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                             </div>
                        {!! Form::close() !!}




                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
        </form>

    @endif

@stop