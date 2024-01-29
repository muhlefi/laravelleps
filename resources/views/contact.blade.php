@extends('layout/main')

@section('navbarcontact')
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
    <h2  style="color: white; text-shadow: 1px 1px 12px rgba(0, 0, 0, 0.8);">Order Now</h2>
    <div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('lefi'))
            <!-- Your existing code for the form -->

            <div class="container">
                @if (session('lefi'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-secondary mt-3 text-center">
                                <h3 class="shout text-center alert alert-success mt-3">Orderan anda telah terekam</h3>
                                <p class="shout text-center alert alert-success mt-3">Silahkan tunggu pesan di
                                    Whatsapp/Email anda <br> Kami akan mengkonfirmasi jam makanan untuk diantar. </p>
                                <!-- Your existing code for displaying order details -->
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endif

        <form action="{{ route('submit') }}" method="post"  style="color: white; text-shadow: 1px 1px 12px rgba(0, 0, 0, 0.8);">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <!-- Form Bagian Kiri - Nama, Email, Nomor HP, Pilihan Menu, dan Jumlah Pesanan -->
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            id="nama" value="{{ old('nama') }}" placeholder="Masukkan namamu">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" value="{{ old('email') }}" placeholder="Masukkan Emailmu">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="text" name="nomor_hp" class="form-control @error('nomor_hp') is-invalid @enderror"
                            id="nomor_hp" value="{{ old('nomor_hp') }}" placeholder="Masukkan Nomor HP">
                        @error('nomor_hp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="menu">Pilihan Menu</label>
                            <select name="menu" class="form-control @error('menu') is-invalid @enderror" id="menu">
                                <option value="1">Lewamon Tea Ice</option>
                                <option value="2">Lewaci Tea Ice</option>
                                <option value="3">Lewa Tea Ice</option>
                                <option value="4">Lewasoft Coffee Ice</option>
                                <option value="5">Dark Chocolate Ice</option>
                                <option value="6">Lewa Special Uwuh Hot</option>
                            </select>
                            @error('menu')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="jumlah_pesanan">Jumlah Pesanan</label>
                                <input type="number" name="jumlah_pesanan"
                                    class="form-control @error('jumlah_pesanan') is-invalid @enderror" id="jumlah_pesanan"
                                    value="{{ old('jumlah_pesanan') }}" placeholder="Masukkan Jumlah Pesanan">
                                @error('jumlah_pesanan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <!-- Form Bagian Kanan - Alamat dan Pesan -->
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="4"
                            placeholder="Tulis alamatmu disini !">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" class="form-control @error('pesan') is-invalid @enderror" id="pesan" rows="4"
                            placeholder="Tulis pesanmu disini !">{{ old('pesan') }}</textarea>
                        @error('pesan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    @endsection
