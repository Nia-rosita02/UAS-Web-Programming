@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Data Buku</h1>
    </div>
    <div class="col-md-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            + Add Data Buku
        </button>
    </div>
</div>

<div class="card">
    <div class="card-body">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('bukuIndex')}}">                   
                    <input class="form-control mr-sm-2" name='cari' type="search" placeholder="Search Data" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th class="text-center">Judul Buku</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Genre</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($buku as $b)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$b->nama_buku}}</td>
                        <td class="text-center">
                            @if($b->kategori==1)<p>Novel</p>
                            @else <p>Komik</p>
                            @endif
                        </td>
                        <td class="text-center">
                            @if($b->genre==1)<p>Agama Islam</p>
                            @elseif($b->genre==2)<p>Romance</p>
                            @else <p>Comedy</p>
                            @endif
                        </td>
                        <td>{{$b->harga}}</td>
                        <td class="text-center">
                            <a href="{{route('bukuShow',['id'=>$b->id])}}" class="btn btn-warning">Edit</a>
                            <a href="{{route('bukuDestroy',['id'=>$b->id])}}" class="btn btn-danger" onCLick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</a>
                            <a href="{{route('bukuDetail',['id'=>$b->id])}}" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>

        </table>
    </div>
</div>
    
    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Input Data Buku</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <form action="buku/store" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="firstname">Kode Buku</label>
                            <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Buku">
                        </div>
                        <div class="form-group">
                            <label for="firstname">Judul Buku</label>
                            <input name="nama_buku" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul Buku">
                        </div> 
                        <div class="form-group">
                            <label for="firstname">Penerbit</label>
                            <input name="penerbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Penerbit">
                        </div>      
                        <div class="form-group">
                                <label for="exampleFormControlSelect1">Kategori</label>
                                <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">Novel</option>
                                    <option value="2">Komik</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlSelect1">Genre</label>
                                <select name="genre" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">Agama Islam</option>
                                    <option value="2">Romance</option>
                                    <option value="3">Comedy</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="firstname">Harga Buku</label>
                            <input name="harga" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Buku">
                        </div>
                        <div class="form-group">
                            <label for="firstname">Cover Buku</label>
                            <input name="gambar" type="file" class="form-control">
                        </div>
                                        
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
    </div>
</div>

@endsection
