@extends('layout.main')
@section('title', 'dashboard')
@section('content')

<h1><b>Halo, Admin</b></h1>
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
<div class="row my-5">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-lg-6">
                    <a href="/book"><i class="bi bi-journals" style="color: white;"></i></a>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        Books
                    </div>
                    <div class="card-count">
                        {{$book->where('=', null)->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-data category">
            <div class="row">
                <div class="col-lg-6">
                    <a href="/category"><i class="bi bi-bookmark-plus" style="color: white;"></i></a>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        Category
                    </div>
                    <div class="card-count">
                        {{$category->where('=', null)->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-lg-6">
                    <a href="/users"><i class="bi bi-person" style="color: white;"></i></a>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        User
                    </div>
                    <div class="card-count">
                        {{$userr->where('=', null)->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
