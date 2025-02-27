<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * @return View of all tasks
     */
    public function index(): View
    {
        $tasks = Task::orderBy('state')->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * @param Task $id of the Task
     * @return View of task specified with the ID
     */
    public function show(Task $id): View
    {
        return view('tasks.show', ['task' => $id]);
    }

    /**
     * @return View to create a new task
     */
    public function create(): View
    {
        return view('tasks.create');
    }

    /**
     * @param Request $request the submitted info for the new task
     * @return RedirectResponse to go back to the full tasklist
     * Stores the new task and redirects to a full tasklist.
     */
    public function store(Request $request)
    {
        {
            $validated = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'priority' => ['numeric', 'min:0', 'max:4'],
                'state' => ['required', 'numeric'],
                'time_estimated' => ['nullable', 'numeric'],
                'time_spent' => 'numeric'
            ]);
            // Create a new Post model object
            $task = Task::create($validated);

            // Redirect to the blog index page
            return redirect()->route('task.index');
        }
    }
}
