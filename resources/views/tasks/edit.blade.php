@extends('layout')

@section('content')
    <div class="container">
        <br>
        <h3>Edit task # - {{$task->id}}</h3>
        <br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @include('errors')

                {!! Form::open(['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$task->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$task->description}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-secondary">Update</button>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection