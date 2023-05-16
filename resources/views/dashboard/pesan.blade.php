@extends('layout.main')
@section('title', 'dashboard')
@section('content')

<h1>Pesan</h1>
@if (Session::get('danger'))
<div class="alert alert-danger">
    {{Session::get('danger')}}
</div>
@endif
<div class="card vh-100">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Messege</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesan as $number => $ps)
            @if ($ps['status'] == 0)
            <tr>
                <th scope="row">{{$number +1}}</th>
                <td>{{$ps->name}}</td>
                <td>{{$ps->pesan}}</td>
                <td>
                    <form action="{{route('deletePesan', $ps->id)}}" class="d-inline"
                        onsubmit="return confirm('Tetap hapus data ini ?')">
                        <button type="submit" class="btn btn-danger text-white">Hapus</a></button>
                    </form>
                    {{-- <a href="{{route('delete', $ps->id)}}" class="btn btn-danger text-white"
                    role="button">Hapus</a> --}}
                </td>
                @endif
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection
