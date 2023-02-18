<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
  function index(){

    return view('dashboards.publishers.index');

  }
  function profile(){

    return view('dashboards.publishers.profile');

  }
  function settings(){

    return view('dashboards.publishers.settings');

  }
}
