@extends('layouts.app')

@section('title-block')Регистрация@endsection

@section('home')
<h1>Регистрация</h1>
<div class="p-1 mb-1 bg-secondary text-white"></div>
<form action="{{ route('contact-reg') }}" method="post">
  @csrf

  <div class="form-group">
    <label for="name">Логин</label>
    <input type="text" name= "name" placeholder="Ivanov" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" name= "email" placeholder="user@gmail.com" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Пароль</label>
    <input  type="text" name= "password" placeholder="**********" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Повторите пароль</label>
    <input  type="text" name= "doublepassword" placeholder="**********" class="form-control">
  </div>
    <div class="p-1 mb-1 bg-#e6e9ec"></div>
  <button type="submit" class="btn btn-secondary">Регистрация</button>
</form>
@endsection
