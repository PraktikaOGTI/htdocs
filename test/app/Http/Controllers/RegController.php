<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegRequest;
use App\Models\User;
use Illuminate\Cookie\CookieJar;
class RegController extends Controller
{

  public function reg(RegRequest $req) {

    $user = new User();
    $user->name = $req->input('name');
    $user->email = $req->input('email');
    $user->password = $req->input('password');
    $CookieJar = new CookieJar();
    $CookieJar->forever('name', 'Fred');
    $user-> save();
  return redirect()->route('home')->with('success', 'Успешная регистрация');

  }
}
