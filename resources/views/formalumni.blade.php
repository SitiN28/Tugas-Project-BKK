@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BKK | Alumni</title>
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
                                <input type="text" name="nama" id="nama" value="{{$alumni->nama}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" value="{{$alumni->alamat}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">No Hp</label>
                                <input type="text" name="no_hp" id="no_hp" value="{{$alumni->no_hp}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Foto</label>
                                <input type="file" name="foto" id="foto" value="{{$alumni->foto}}" class="form-control" placeholder="Silahkan di isi">
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
