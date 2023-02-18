<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
  function index(){

    return view('dashboards.forums.index');

  }
  function profile(){

    return view('dashboards.forums.profile');

  }
  function settings(){

    return view('dashboards.forums.settings');

  }
}
