<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class TaskController extends Controller
{
    public function index(){
    	$task =Task::orderBy('id','desc') ->get();
    	return view('task.index')->with('storedTask', $task);
    }
     public function store(Request $request){
    	$this->validate($request, ['newTask' => 'required|min:5|max:130|required|regex:/(\w.+\s).+/']);
    	$task = new Task;
    	$task ->name = $request ->newTask;
    	$task -> save();
    	return redirect('/');
    }
    public function destroy($id){
   
   	$task=Task::find($id);
   	$task -> delete();
    	
    	return redirect()->back();
    

}
 public function edit($id) {
 		$task=Task::find($id);
        return view('task.edit')->with('editingTask',$task);
    }
 public function editdone(Request $request) {
        $task = Task::find($request->input('id'));
        $task->name = $request->input('name');
        $task->save();
        return redirect()->route('task.index');
    
}

}