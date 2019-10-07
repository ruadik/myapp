@extends('layout')

@section('content')
    <div class="container">
        <h3>Task list</h3>
        <a href="{{route('tasks.create')}}">
            <button type="button" class="btn btn-primary">Create</button>
        </a>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($tasks as $task)
                        <tr>
                            <th scope="row">{{$task->id}}</th>
                            <td>{{$task->title}}</td>
                            <td>{{$task->description}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('tasks.show', $task->id)}}">
                                        <button type="button" class="btn btn-light"><ion-icon name="eye"></ion-icon></button>
                                    </a>
                                    <a href="{{route('tasks.edit', $task->id)}}">
                                        <button type="button" class="btn btn-light"><ion-icon name="create"></ion-icon></button>
                                    </a>

                                    {!! Form::open(['route' => ['tasks.destroy',$task->id], 'method'=>'delete']) !!}
                                                <button onclick="return confirm('Вы уверены что ходите удалить?')" type="submit" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                                                    <ion-icon name="trash"></ion-icon>
                                                </button>
                                    {!! Form::close() !!}

                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

