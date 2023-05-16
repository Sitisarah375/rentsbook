@extends('layout.main')
@section('title', 'dashboard')
@section('content')

<h1>Category</h1>
@if (Session::get('danger'))
<div class="alert alert-danger">
    {{Session::get('danger')}}
</div>
@endif
<section class="section">
    <div class="col-lg-11">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('storeCategory') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="category_name">
                        </div>
                    </div>

                    <div class="row-mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                    </div>
                </form>
            </section>

            <div class="row my-5">
                <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $number => $category)
                        <tr>
                            <td>{{$number+1}}</td>
                            <td>{{$category['categoryID']}}</td>
                            <td>{{$category['category_name']}}</td>
                            <td>
                                <form action="{{route('deleteCategory', $category->categoryID)}}"
                                    onsubmit="return confirm('Tetap hapus data ini?')">
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
@endsection
