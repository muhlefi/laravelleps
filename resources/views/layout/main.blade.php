<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lefi | {{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS  -->
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <!-- Navbar -->
    @include('layout/navbar')

    <!-- Header -->
    <section class="header">
        <div class="container pb-5 text-center" style="padding-top: 90px;margin-top: 70px;">
            @yield('header')
    </section>
    <!-- HighLight -->
    <section id="aboutme"></section>
    <section class="about-me">
        <div class="container py-5 mt-4 justify-content-center text-center">
            <h2>Why Us?</h2> <br>
            <div class="d-flex flex-wrap justify-content-around">
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Kualitas</div>
                    <div class="card-body">
                        <h3 class="card-title">Disukai Jenderal</h3>
                        <p class="card-text">Captain Lefi sampai ketagihan meminum produk ini.</p>
                    </div>
                </div>
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Harga</div>
                    <div class="card-body">
                        <h3 class="card-title">Murah Meriah</h3>
                        <p class="card-text">Uang saku tetap aman dan bisa njajan liyane disambi meminum kesegaran kopi
                            lewa.</p>
                    </div>
                </div>
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Desain</div>
                    <div class="card-body">
                        <h3 class="card-title">Gelas Keren</h3>
                        <p class="card-text">Sesuai dengan kebutuhan story mu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Project -->
    <section id="project"></section>
    <section class="project">
        <div class="container py-5 mt-4 justify-content-center text-center">
            <h3>Produk Kami</h3>
            <p>Ini merupakan tugas PKK yang diberikan oleh Bu Venny untuk membuat suatu produk. <br>
                Saya dan teman saya Dewa memutuskan untuk membuat suatu merek yang menjual aneka minuman ala cafe yang
                diberi nama LEWA (Lefi dewa)
            </p>

            <div class="row justify-content-center text-center pt-4 align-items-center mb-4">
                <div class="col-12 col-md-6 col-lg-4 my-2">
                    <div class="card" style="width: 100%;">
                        <img src="asset/img/1.png" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lewamon Tea Ice</h5>
                            <p class="card-text">Perpaduan kecutnya lemon dan segarnya teh berkualitas menghilangkan rasa dahaga kamu.</p>
                            <a href="contact" class="btn btn-primary">Klik untuk beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 my-2">
                    <div class="card" style="width: 100%;">
                        <img src="asset/img/2.png" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lewaci Tea Ice</h5>
                            <p class="card-text">Manisnya leci dipadukan dengan teh otentik milik kami siap mengalahkan manise ayangmu.</p>
                                <a href="contact" class="btn btn-primary">Klik untuk beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 my-2">
                    <div class="card" style="width: 100%;">
                        <img src="asset/img/3.png" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lewa Tea Ice</h5>
                            <p class="card-text">Gausa dikeki opo-opo aslie teh gawenane mas-mas lewa iki wes enak,cobaen lek gapercoyo.</p>
                                <a href="contact" class="btn btn-primary">Klik untuk beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 my-2">
                    <div class="card" style="width: 100%;">
                        <img src="asset/img/4.png" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lewasoft Coffee Ice</h5>
                            <p class="card-text">Perpaduan kopi murni yang halus dengan kesegaran susu fullcream membuat cita rasa creamy yang tak tertandingi.</p>
                                <a href="contact" class="btn btn-primary">Klik untuk beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 my-2">
                    <div class="card" style="width: 100%;">
                        <img src="asset/img/5.png" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dark Chocolate Ice</h5>
                            <p class="card-text">Coklat legit dari lewa,dipadukan dengan susu full cream yang menjadikan kecoklatan lewa tak perlu diragukan lagi.</p>
                                <a href="contact" class="btn btn-primary">Klik untuk beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 my-2">
                    <div class="card" style="width: 100%;">
                        <img src="asset/img/6.png" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lewa Uwuh Special Hot</h5>
                            <p class="card-text">Campuran berbagai rempah khas Indonesia yang menghangatkan tubuh dikala hujan di SMK NUSA.</p>
                                <a href="contact" class="btn btn-primary">Klik untuk beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row ms-auto">
                <div class="col">
                    <h4>Kontak Saya</h4>
                    <ul class="list-unstyled">
                        <li>Email: muhammadlepii@gmail.com</li>
                        <li>Phone: 081333499898</li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><a href="#aboutme">Why us?</a></li>
                        <li><a href="contact">Order Now</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Follow Saya</h4>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p class="small mt-2 mb-0">Made With Love | Muhammad Lefi Rachmad</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
