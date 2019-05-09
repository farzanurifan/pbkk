@extends('layouts.app')

@section('content')
    <br>
    <h1>Admin Page</h1>
    <br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">User</th>
                <th scope="col">Harga</th>
                <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <th scope="row">{{$barang->id}}</th>
                    <td>{{$barang->nama_barang}}</td>
                    <td>{{$barang->user_id}}</td>
                    <td>{{$barang->harga_awal}}</td>
                    <td><img src="{{asset('img/').$barang->path}}" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection