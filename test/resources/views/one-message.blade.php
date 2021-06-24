@extends('layouts.app')

@section('title-block'){{$data->message}}@endsection

@section('home')

<h1>{{$data->name}}</h1>
<div class="alert alert-secondary">
  <p>{{ $data->email }}</p>
  <p>{{ $data->message }}</p>
  <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-secondary">Редактировать</button></a>
  <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-dark">Удалить</button></a>
</div>
@endsection
