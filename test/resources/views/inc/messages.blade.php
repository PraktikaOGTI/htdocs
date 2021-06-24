@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

@if(session('success'))
  <div class="alert alert-succsess">
    {{ session('success') }}
  </div>
@endif
