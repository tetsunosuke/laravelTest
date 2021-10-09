<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Exception;
use DB;
use App\Models\Task;

class ActionController extends Controller
{
  public function index(Request $request) {
    $tasks = Task::all();
    return view('welcome')->with([
        "tasks" => $tasks
    ]);
  }
  public function add(Request $request) {
    Log::debug('add');
    Log::debug($request);
    Task::insert([
        'content' => $request->get("add")
    ]);
    return redirect('/');
    
  }
  public function delete(Request $request) {
    Log::debug('delete');
    Log::debug($request);
    Task::where('id', $request->get("id"))->delete();
    return redirect('/');
  }
}

  
