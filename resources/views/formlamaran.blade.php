@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BKK | Lamaran</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <form action="{{$action}}" method="post" enctype="multipart/form-data">
        @csrf
             <div class="row">
                 <div class="container-fluid p-3 ">
                    <div class="col-md-12 mt-5">
                        <form action="" method="POST">
                            @csrf
                            <div class="col-mb-3">
                                <label for="" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" value="{{$lamaran->nama}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Jenis Kelamin</label> <br>
                                <input type="radio" name="jk" id="jk" value="laki-laki" {{ $lamaran->jk=="laki-laki"?"checked":"" }}>Laki-laki
                                <input type="radio" name="jk" id="jk" value="perempuan" {{ $lamaran->jk=="perempuan"?"checked":"" }}>Perempuan
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{$lamaran->tgl_lahir}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Jurusan</label>
                                <input type="text" name="jurusan" id="jurusan" value="{{$lamaran->jurusan}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Tahun Ajaran</label>
                                <input type="text" name="thn_ajaran" id="thn_ajaran" value="{{$lamaran->thn_ajaran}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" value="{{$lamaran->alamat}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Foto</label>
                                <input type="file" name="foto" id="foto" value="{{$lamaran->foto}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="pt-3">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                 </div>
             </div>
    </form>
</body>
</html>
@endsection
