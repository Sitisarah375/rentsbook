@extends('layout.main')
@section('title', 'dashboard')
@section('content')

<h1>Edit User</h1>
<form id="create-form" action="{{route('updateBook', $book->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" value="{{ $book->judul }}" class="form-control" id="judul"
                    placeholder="judul">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" name="penulis" value="{{ $book->penulis }}" class="form-control" id="penulis"
                    placeholder="penulis">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" value="{{ $book->penerbit }}" class="form-control" id="penerbit"
                    placeholder="penerbit">
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Kategori Buku</label>
                 <div class="col-sm-10">
                         <select class="form-select" aria-label="Default select example" name="kategori">
                         @foreach($category as $cate)
                         <option value="{{ $cate->categoryID }}">{{ $cate->category_name }}</option>
                         @endforeach
                     </select>
                 </div>
             </div>
            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsis</label>
                <textarea class="form-control" name="sinopsis" id="sinopsis" rows="3">{{ $book->sinopsis }}</textarea>
            </div>  
            <div class="mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>
            </div>
            <button type="submit" class="btn btn-danger btn-lg">Edit</button>
        </div>
    </div>
</form>

@endsection
