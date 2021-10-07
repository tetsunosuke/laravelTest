<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Exception;
use DB;

class ActionController extends Controller
{
  public function add(Request $request) {
    Log::debug('add');
    Log::debug($request);
    return view('welcome');
  }
  public function delete(Request $request) {
    Log::debug('delete');
    Log::debug($request);
    return view('welcome');
  }
}

  