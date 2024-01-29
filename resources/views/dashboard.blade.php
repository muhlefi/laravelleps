<!-- resources/views/dashboard/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lefi | Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .truncate {
            max-width: 18px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .container {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Dashboard Pemesanan</h2>
        <div class="content">
            <table class="table table-bordered" style="margin: 0 auto;">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor HP</th>
                        <th>Menu</th>
                        <th>Jumlah Pesanan</th>
                        <th>Alamat</th>
                        <th>Pesan</th>
                        <th>Waktu Order</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->nama }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->nomor_hp }}</td>
                            <td>{{ $order->menu }}</td>
                            <td>{{ $order->jumlah_pesanan }}</td>
                            <td class="truncate">{{ $order->alamat }}</td>
                            <td class="truncate">{{ $order->pesan }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <a href="{{ route('edit', ['id' => $order->id]) }}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @auth
        <!-- Tampilkan tombol logout jika pengguna sudah login -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link btn btn-link">Logout</button>
        </form>
    @else
        <a class="nav-link btn btn-link" href="{{ route('login') }}">Log in</a>
    @endauth
    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
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
                        <li><a href="#aboutme">About me</a></li>
                        <li><a href="contact">Contact</a></li>
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
    </footer>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
