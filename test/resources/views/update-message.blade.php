
@extends('layouts.app')

@section('title-block')Обновление записи@endsection
<div class="p-1 mb-1 bg-secondary text-white"></div>

@section('home')
<h1>Обновление записи</h1>
<div class="p-1 mb-1 bg-secondary text-white"></div>


<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
  @csrf

  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name= "name" value="{{$data->name}}" placeholder="Имя отправителя" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" name= "email" value="{{$data->email}}" placeholder="user@gmail.com" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Тема сообщения</label>
    <textarea  type="text" name= "message" value="{{$data->message}}" id="message" placeholder="Длина сообщения должна быть больше 100 символов" class="form-control">{{$data->message}}</textarea>
  </div>
  <div class="p-1 mb-1 bg-white"></div>
  <button type="submit" class="btn btn-secondary">Обновить</button>
</form>

@endsection
