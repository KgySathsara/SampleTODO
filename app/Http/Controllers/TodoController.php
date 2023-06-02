<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $task;

    public function __construct()
    {
        $this->task = new Todo();
    }

    public function index()
    {
        $response['task'] =$this->task->all(); //to get the valuefor index page
        return view('page\todo\index')->with($response);
    }

    public function store(Request $request)
    {
        //  dd($request);
        $this->task->create($request->all());
        return back();
        //return redirect()->route('home');
    }

    public function delete(Todo $task_id)
    {

        $task = $this->task->find($task_id);
        $task->delete();
        return back();
    }

    public function done(Todo $task_id)
    {

        $task = $this->task->find($task_id);
        $task->done = 1;
        $task->update();
        return back();
    }
}
