
@extends('layouts.app')

@section('title-block')Обратная связь@endsection

@section('home')
<h1>Обратная связь</h1>
<div class="p-1 mb-1 bg-secondary text-white"></div>


<form action="{{ route('contact-form') }}" method="post">
  @csrf

  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name= "name" placeholder="Имя отправителя" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" name= "email" placeholder="user@gmail.com" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Тема сообщения</label>
    <textarea  type="text" name= "message" id="message" placeholder="Длина сообщения должна быть больше 100 символов" class="form-control"></textarea>
  </div>
  <div class="p-1 mb-1 bg-#e6e9ec"></div>
  <button type="submit" class="btn btn-secondary">Отправить</button>
</form>

@endsection
