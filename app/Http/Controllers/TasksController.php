<?php

namespace App\Http\Controllers;


use App\Http\Requests\createTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TasksController extends Controller
{
    use ValidatesRequests;

    public function index(){
//        dd(11);
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
//        dd($request->all());

        //Вызов только того, что нужно по ключам массива
//        dd($request->except('description'));
//        dd($request->only('description'));

        ///Валидация без использования Request
/// //        $this->validate($request,[
////            'title' => 'required',
////            'description' => 'required'
////        ]);

//Добавление в БД без  модели  ////
//        $task = new Task;
//        $task->title = $request->get('title');
//        $task->description = $request->get('description');
//        $task->save();
//////////////////////////
/// Добавление в БД с применением МОДЕЛИ  ////
///         $task = new Tasks;
////        $task->fill($request->all());
////        $task->save();
//////////////////////////

        Task::create($request->all());

        return redirect()->route('index');
    }

    public function show($id){
        $task = Task::find($id);
//        dd($task);

        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id){
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update($id, Request $request){

        $task = Task::find($id);
        $task->fill($request->all());
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function destroy($id){
        Task::destroy($id);
        return redirect()->route('tasks.index');
    }
}
