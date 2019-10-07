@extends('layout')

@section('content')
    <div class="container">
        <div>
            <br>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

            <div class="card">
                <h5 class="card-header">Show task # - {{$task->id}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$task->title}}</h5>
                    <p class="card-text">{{$task->description}}</p>
                </div>
            </div>

            </div>
        </div>
    </div>
@endsection