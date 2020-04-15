<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
        
    /**
     * Show all user's task
     *
     * @param  mixed $task
     * @return void
     */
    public function index(Task $task)
    {
        $user_id = auth()->user()->id;
        $tasks = $task->where('user_id', $user_id)->orderByDesc('updated_at')->paginate(5);
        return view('tasks.index', compact('tasks'));
    }
    
    /**
     * Show form for create new task
     *
     * @return void
     */
    public function create()
    {
        return view('tasks.create');
    }
    
    /**
     * Store new task to DB
     *
     * @param  mixed $request
     * @param  mixed $task
     * @return void
     */
    public function store(TaskRequest $request, Task $task)
    {
        $request->validated();
        $task->create($request->all());
        return redirect()->route('tasks.index')
                            ->with('status','Task created successfully');
    }
    
    /**
     * Display current selected task
     *
     * @param  mixed $task
     * @return void
     */
    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }
    
    /**
     * Show form for edit current selected task
     *
     * @param  mixed $task
     * @return void
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update current selected task
     *
     * @param  mixed $request
     * @param  mixed $task
     * @return void
     */
    public function update(TaskRequest $request, Task $task)
    {
        $request->validated();
        $task->update($request->all());
        return redirect()->route('tasks.index')
                            ->with('status','Task updated successfully');
    }
    
    /**
     * Remove selected current task from DB
     *
     * @param  mixed $task
     * @return void
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')
                            ->with('status','Task deleted successfully');
    }
}
