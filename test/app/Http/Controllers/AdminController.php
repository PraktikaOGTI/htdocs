<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
      return view('messages');
    }
    public function authenticated(Request $request, $user)
    {
      
    }
}
