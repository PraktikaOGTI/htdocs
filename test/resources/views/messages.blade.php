@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('home')

<h1>Все сообщения</h1>
<div class="p-1 mb-1 bg-secondary text-white"></div>
@foreach($data as  $el)
<div class="alert alert-secondary">
  <h3>{{ $el-> name }}</h3>
  <p>{{ $el->email }}</p>
  <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-secondary">Детальнее</button></a>
</div>
@endforeach
@endsection
