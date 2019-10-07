@extends('layout')

@section('content')
    <div class="container">
        <h3>Create task</h3>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @include('errors')

                {!! Form::open(['route' => 'store']) !!}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{old('description')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-secondary">Create</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection