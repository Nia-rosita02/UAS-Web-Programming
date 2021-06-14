@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h2>Detail Buku</h2>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-md-3 text-center">
        <img src="{{url('gambar/'.$buku->gambar)}}" class="rounded img-thumbnail" width="200px" alt="cover buku">
    </div>
    <div class="col-md-6">
        <table border="0" class="table">
            <tr>
                <td width="40%">Kode Buku</td>
                <td>:</td>
                <td>{{$buku->id}}</td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td>{{$buku->nama_buku}}</td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td>{{$buku->penerbit}}</td>
            </tr>
            <tr>
                <td>Kategori Buku</td>
                <td>:</td>
                <td>{{$buku->kategori}}</td>
            </tr>
            <tr>
                <td>Genre Buku</td>
                <td>:</td>
                <td>{{$buku->genre}}</td>
            </tr>
            <tr>
                <td>Harga Buku</td>
                <td>:</td>
                <td>{{$buku->harga}}</td>
            </tr>
        </table>
    </div>
</div>
<hr />  
@endsection
