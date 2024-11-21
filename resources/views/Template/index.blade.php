<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Protocol V</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class=" bg-body-tertiary">
    <div id="main" class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="d-flex flex-column  bg-primary bg-gradient shadow vh-100">
            <div class="logo">
                <img src="assets/img/kasir-logo.jpg" alt="" srcset="">
            </div>
            <div class="menu p-2 d-flex flex-column gap-2">
                <a href="{{ route('dashboard') }}"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50 active">
                    <span class="">Dashboard</span>
                    <i class="bi-speedometer2 "></i>
                </a>
                <a href="#"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Meja</span>
                    <i class="bi bi-person-gear "></i>
                </a>
                <a href="{{ route('menu') }}"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Menu</span>
                    <i class="bi-bag "></i>
                </a>
                <a href="transaksi.html"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Order</span>
                    <i class="bi-cart "></i>
                </a>
                <a href="transaksi.html"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Transaksi</span>
                    <i class="bi-cart "></i>
                </a>
                <a href="#"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Laporan</span>
                    <i class="bi-table "></i>
                </a>
            </div>
            <div class="logout p-2 mt-auto">
                <a href="{{ route('logout') }}"
                    class="btn btn-danger w-100 d-flex px-3 justify-content-between align-content-center">
                    <span>Logout</span>
                    <i class="bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
        @if (session('pesan'))
            <div class="mt-5 alert alert-danger d-flex align-items position-absolute top-50 start-50" id="ss"
                role="alert">
                <div>
                    {{ session('pesan') }}
                </div>
            </div>
            <script>
                setTimeout(() => {
                    document.getElementById('ss').remove()
                }, 2000);
            </script>
        @endif
        @if (session('message'))
            <div class="mt-5 alert alert-success d-flex align-items position-absolute top-50 start-50" id="ss" role="alert">
                <div>
                    {{ session('message') }}
                </div>
            </div>
            <script>
                setTimeout(() => {
                    document.getElementById('ss').remove()
                }, 2000);
            </script>
        @endif
        <!-- Akhir Sidebar -->
        <!-- Konten Utama -->
        @yield('konten-utama')
        <!-- Akhir Konten Utama -->
    </div>
</body>

</html>
