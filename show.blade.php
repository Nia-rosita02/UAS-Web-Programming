@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Data Pelanggaran</h1>
        <h2>{{$pelanggaran->nama}}</h2>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Nama Siswa</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Detail</th>
                            <th class="text-center">Hukuman</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($pelanggaran->siswa as $p)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{$p->pivot->tanggal}}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->kelas->nama}}</td>
                                <td>{{$p->pivot->detail}}</td>
                                <td>{{$p->pivot->hukuman}}</td>
                                <td><a href="{{route('kasusDestroy',['id'=>$p->pivot->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin Menghapus?')"><i class="fas fa-trash" title="Delete"></i></a></td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>  
@endsection
