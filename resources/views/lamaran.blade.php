@extends('template')
@section('content')
    <a href="{{ url('lamaran/add') }}">
        <button class="btn btn-primary">Tambah Data</button>
    </a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>TANGGAL LAHIR</th>
            <th>JURUSAN</th>
            <th>TAHUN AJARAN</th>
            <th>ALAMAT</th>
            <th>FOTO</th>
            <th>AKSI</th>
        </tr>
      @foreach ($lamaran as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->nama}}</td>
            <td>{{ $item->jk }}</td>
            <td>{{ $item->tgl_lahir }}</td>
            <td>{{ $item->jurusan }}</td>
            <td>{{ $item->thn_ajaran }}</td>
            <td>{{$item->alamat}}</td>>
            <td><img src="/storage/{{$item->foto}}" width="150" ></td>
            <td>
                <a href="lamaran/hapus/{{$item->id}}" class="btn btn-danger btn-sm">hapus</a>
                <a href="lamaran/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
