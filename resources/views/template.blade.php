<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success text-white fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">BKK YPC</a>
            <button class="navbar-toggler text-white font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="alumni" class="nav-link {{ Request::segment(1)=='alumni'?'active':'' }}">Alumni</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="perusahaan" class="nav-link {{ Request::segment(1)=='perusahaan'?'active':'' }}">Perusahaan</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="lamaran" class="nav-link {{ Request::segment(1)=='lamaran'?'active':'' }}">Lamaran</a>
                    </li>
                        <a href="logout" class="nav-link">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 7%">
        @yield('content')
    </div>
    <script>
    $(document).ready(function () {
    $('tabel').DataTable();


    });</script>
</body>
</html>


