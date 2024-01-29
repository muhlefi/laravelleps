<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lefi | Edit Order</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Order</h2>
        <form action="{{ route('update', ['id' => $order->id]) }}" method="post">
            @csrf
            @method('PUT') <!-- Menunjukkan bahwa ini adalah permintaan pembaruan -->

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $order->nama }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $order->email }}">
            </div>

            <div class="form-group">
                <label for="nomor_hp">Nomor HP</label>
                <input type="text" name="nomor_hp" class="form-control" value="{{ $order->nomor_hp }}">
            </div>

            <div class="form-group">
                <label for="menu">Pilihan Menu</label>
                <select name="menu" class="form-control">
                    <option value="1" {{ $order->menu == 1 ? 'selected' : '' }}>Lewamon Tea Ice</option>
                    <option value="2" {{ $order->menu == 2 ? 'selected' : '' }}>Lewaci Tea Ice</option>
                    <option value="3" {{ $order->menu == 3 ? 'selected' : '' }}>Lewa Tea Ice</option>
                    <option value="4" {{ $order->menu == 4 ? 'selected' : '' }}>Lewasoft Coffee Ice</option>
                    <option value="5" {{ $order->menu == 5 ? 'selected' : '' }}>Dark Chocolate Ice</option>
                    <option value="6" {{ $order->menu == 6 ? 'selected' : '' }}>Lewa Special Uwuh Hot</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah_pesanan">Jumlah Pesanan</label>
                <input type="number" name="jumlah_pesanan" class="form-control" value="{{ $order->jumlah_pesanan }}">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control">{{ $order->alamat }}</textarea>
            </div>

            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea name="pesan" class="form-control">{{ $order->pesan }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <form action="{{ route('delete', ['id' => $order->id]) }}" method="post" class="mt-3" id="deleteForm">
            @csrf
            @method('DELETE')

            <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-4">
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
        <div class="text-center">
            <p class="small mt-2 mb-0">Made With Love | Muhammad Lefi Rachmad</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        function confirmDelete() {
            var confirmation = confirm("Are you sure you want to delete this order?");
            if (confirmation) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
</body>

</html>
