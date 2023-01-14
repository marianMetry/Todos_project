<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
            $todos = Todo::all();
            return view('todos.index' ,['todos'=>$todos]);
        // return view('todo')->with('todos' , $todos);
        // return view('todo', compact('todos'));
    }

    public function show($todoId)
    {
        $todo = Todo::find($todoId);
        return view('todos.show' , ['todo'=>$todo]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
      $validated =  $request->validate([
            'titel'=>'required|min:6',
            'desc' => 'required'
        ]);

        $todoNew = new Todo;
        $todoNew->titel = $request->titel;
        $todoNew->description = $request->desc;
        $todoNew->save();
        session()->flash('success' , 'Todo Created Succesfully');
        return redirect('/todo');
    }

    public function edit($todoId)
    {
        $todo = Todo::find($todoId);
        return view('todos.edit' , ['todo'=>$todo]);

    }
    public function update(Request $request , $id)
    {
        $request->validate([
            'titel'=>'required|min:6',
            'desc' => 'required'
        ]);

        $todoNew = Todo::find($id);
        $todoNew->titel = $request->titel;
        $todoNew->description = $request->desc;
        $todoNew->save();
        session()->flash('success' , 'Todo updated Succesfully');

        return redirect('/todo');
    }
    public function delete($id)
    {
        $todoDelete = Todo::find($id);
        // dd($todoDelete);
        $todoDelete->delete();
        session()->flash('success' , 'Todo deleted Succesfully');

        return redirect('/todo');
    }
    public function complete($id)
    {
        $todoCompleted =Todo::find($id);
        $todoCompleted->completed = true;
        // dd($todoCompleted);
        session()->flash('success' , 'Todo completed Succesfully');

        return redirect('/todo');

    }
}
