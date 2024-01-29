{{-- <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary shadow p-3 fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Lefi Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link @yield('navbarhome')" aria-current="page" href="/">Home</a>
                <a class="nav-link @yield('navbaraboutme')" href="#aboutme">About Me</a>
                <a class="nav-link @yield('navbarproject')" href="#project">Produk</a>
                <a class="nav-link @yield('navbarcontact')" href="contact">Order Now</a>
                <a class="nav-link" href="{{ route('login') }}">Log in</a>
            </div>
        </div>

    </div>
    </div>
</nav> --}}

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary shadow p-3 fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Lefi Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link @yield('navbarhome')" aria-current="page" href="/">Home</a>
                <a class="nav-link @yield('navbaraboutme')" href="#aboutme">About Me</a>
                <a class="nav-link @yield('navbarproject')" href="#project">Produk</a>
                <a class="nav-link @yield('navbarcontact')" href="contact">Order Now</a>

                @auth
                <!-- Tampilkan tombol logout jika pengguna sudah login -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link">Logout</button>
                </form>
            @else
                <a class="nav-link btn btn-link" href="{{ route('login') }}">Log in</a>
            @endauth
        </div>
    </div>
</nav>
