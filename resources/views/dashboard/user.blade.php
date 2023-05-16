@extends('layout.main')
@section('title', 'dashboard')
@section('content')

<h1>Data User</h1>
@if (Session::get('danger'))
<div class="alert alert-danger">
    {{Session::get('danger')}}
</div>
@endif
@if (Session::get('edit'))
<div class="alert alert-success">
    {{Session::get('edit')}}
</div>
@endif
<div class="card vh-100">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $number => $dt)
            @if ($dt['status'] == 0)
            <tr>
                <th scope="row">{{$number +1}}</th>
                <td>{{$dt->name}}</td>
                <td>{{$dt->email}}</td>
                <td>{{$dt->no_hp}}</td>
                <td>{{$dt->address}}</td>
                <td>
                    <form action="{{route('deleteUser', $dt->id)}}" class="d-inline"
                        onsubmit="return confirm('Tetap hapus data ini ?')">
                        <button type="submit" class="btn btn-danger text-white">Hapus</a></button>
                    </form>
                    {{-- <button type="submit" class="btn btn-danger text-white"><a
                            style="text-decoration: none; color:white;"
                            href="{{route('delete', $dt->id)}}">Hapus</a></button> --}}
                    {{-- <form action="{{route('update', $dt->id)}}" method="get">
                    <button type="submit" class="btn btn-warning text-white">Edit</a></button>
                    </form> --}}
                    <a href="{{route('editUsers', $dt->id)}}" class="btn btn-warning text-white" role="button">Edit</a>
                </td>
                @endif
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection
