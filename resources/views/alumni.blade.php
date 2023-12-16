@extends('template')
@section('content')
    <a href="{{ url('alumni/add') }}">
        <button class="btn btn-primary">Tambah Data</button>
    </a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>FOTO</th>
            <th>AKSI</th>
        </tr>
      @foreach ($alumni as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->no_hp}}</td>
            <td><img src="/storage/{{$item->foto}}" width="150" ></td>
            <td>
                <a href="alumni/hapus/{{$item->id}}" class="btn btn-danger btn-sm">hapus</a>
                <a href="alumni/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
