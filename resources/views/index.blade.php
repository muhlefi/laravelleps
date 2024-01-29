@extends('layout/main')

@section('navbarhome')
    active
@endsection

@section('header')
    <style>
        .header {
            background-image: url('asset/img/backgroundlewa.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <img class="d-block mx-auto mb-3 rounded-circle" src="asset/img/LEWA.png" alt="" width="170" height="170">
    <div style="color: white; text-shadow: 1px 1px 12px rgba(0, 0, 0, 0.8);">
        <h2 class="fw-bold">Welcome To LEWA Coffee</h2>
        <p>Ini merupakan tugas uji level yang diberikan oleh Bu Venny untuk membuat suatu produk. <br>
            Saya dan teman saya Dewa memutuskan untuk membuat suatu merek yang menjual aneka minuman ala cafe yang
            diberi nama LEWA (Lefi dewa)
        </p> <br> <br> <br>
        <a href="contact"><button class="btn btn-primary btn-lg">Order Now !!!</button></a>
    </div>
    </div>
@endsection
