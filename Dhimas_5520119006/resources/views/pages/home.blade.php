@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <br>
    <div class="jumbotron bg-dark" style="margin-left: 20%; margin-top: 5%;">
        <div style="font-family: arial;" class="text-center">
            <h1 class="display-5 text-light" style=" font-family: arial; font-weight: bold;"><u>Gudang Laptop</u></h1>
            <h5 class="display-5" style="font-family: arial; font-weight: bold; margin: 0px; color: white;">Semua Laptop Pasti Ada</h5>
        </div>
    </div>
<br><br>
    <div class="card bg-dark text-white" style="width: 700px; height: 200px; margin-left: 27%;">
        <div class="card-img-overlay">
            <h2 class="card-title"><u>Lenovo Ideapad Gaming</u></h2>
            <p class="card-text">Lenovo Ideapad Gaming 3i hadir dengan dua tipe yang berbeda berdasarkan spesifikasi dasarnya.
                Pertama, menggunakan CPU Intel Core i5 generasi ke-10 dengan kartu grafis NVIDIA GeForce GTX 1650Ti 4GB.</p>
            <p class="card-text">Last updated 2 mins ago</p>
        </div>
    </div>

    <div class="card bg-dark text-white" style="width: 700px; height: 200px; margin-left: 27%; margin-top: 20px;">
        <div class="card-img-overlay">
            <h2 class="card-title"><u>Tuf FX506ii</u></h2>
            <p class="card-text">Sekitar bulan Juni 2020 lalu, ASUS meluncurkan lini TUF (The Ultimate Force) Gaming terbaru, yaitu TUF Gaming A15. Menggunakan CPU AMD Ryzen terbaru dan GPU NVIDIA GeForce seri RTX, laptop ini diharapkan memiliki performa yang kencang.</p>
            <p class="card-text">Last updated 3 mins ago</p>
        </div>
    </div>

    <div class="card bg-dark text-white" style="width: 700px; height: 200px; margin-left: 27%; margin-top: 20px;">
        <div class="card-img-overlay">
            <h2 class="card-title"><u>Acer Swift 5</u></h2>
            <p class="card-text">Harga dan Spesifikasi Acer Swift 5 Ultrabook Air. Intel Core i5-8265U. 8 GB RAM. 14″ HD. 256 GB SSD. Intel UHD Graphics. Saat ini, semua orang dituntut untuk bisa bekerja secara cepat dan tepat.</p>
            <p class="card-text">Last updated 3 mins ago</p>
        </div>
    </div>
@endsection

@section('js')
    <script>
        console.log('Helo')
    </script>
@endsection
