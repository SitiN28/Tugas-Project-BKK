@extends('template')
@section('content')
    <a href="{{ url('perusahaan/add') }}">
        <button class="btn btn-primary">Tambah Data</button>
    </a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>KONTAK</th>
            <th>FOTO</th>
            <th>AKSI</th>
        </tr>
      @foreach ($perusahaan as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->nama_perusahaan}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->kontak}}</td>
            <td><img src="/storage/{{$item->foto}}" width="150" ></td>
            <td>
                <a href="perusahaan/hapus/{{$item->id}}" class="btn btn-danger btn-sm">hapus</a>
                <a href="perusahaan/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
