@extends('layout.user')
@section('tittle', 'Dashboard')
@section('content')

@if (Session::get('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
@if (Session::get('error'))
<div class="alert alert-danger">
    {{Session::get('error')}}
</div>
@endif

<div class="row mt-4 ms-5" style="display:flex; flex-wrap:wrap;">
  @foreach($data as $book)
<div class="col-lg-4 mb-3" style="margin-top: 30px; width:25%">
<div class="card" style="padding-bottom:20px;width: 26.5rem; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
    <img src="/image/{{ $book['image'] }}" class="card-img-top" alt="..." style="min-height: 400px;max-height:400px; width:100%; object-fit:cover;">
    <div class="card-body">
      <h4 class="card-title"><b>{{ $book['judul'] }}</b></h4>
      <h5 class="card-text">{{ $book['sinopsis'] }}</h5>
      <a href="#" class="btn btn-primary">Reading</a>
    </div>  
</div>
</div>
@endforeach
</div>
<br>

@endsection