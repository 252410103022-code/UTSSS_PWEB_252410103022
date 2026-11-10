<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - PinkBakery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-pink">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">PinkBakery ♡</a>
        <div class="navbar-nav align-items-center">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link active" href="{{ route('menu') }}">Menu</a>
            <a class="nav-link" href="{{ route('cart') }}">Keranjang</a>
            <a class="nav-link" href="{{ route('profile') }}">Profile</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-pink" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="menu-title">Our Bakery Menu ♡</h1>
        <p>Temukan camilan favoritmu di PinkBakery.</p>
        <a href="{{ route('cart') }}" class="btn btn-outline-danger mt-2">Lihat Keranjang</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row g-4">
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?w=600" alt="Fresh Bread">
                <h4>Fresh Bread</h4>
                <p>Roti lembut dan fresh setiap hari.</p>
                <strong>Rp15.000</strong>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="bread">
                    <button class="btn btn-pink w-100 mt-3" type="submit">Tambah ke Keranjang</button>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=600" alt="Chocolate Cake">
                <h4>Chocolate Cake</h4>
                <p>Kue cokelat dengan rasa yang nikmat.</p>
                <strong>Rp35.000</strong>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="cake">
                    <button class="btn btn-pink w-100 mt-3" type="submit">Tambah ke Keranjang</button>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=600" alt="Sweet Pastry">
                <h4>Sweet Pastry</h4>
                <p>Pastry manis dan renyah.</p>
                <strong>Rp20.000</strong>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="pastry">
                    <button class="btn btn-pink w-100 mt-3" type="submit">Tambah ke Keranjang</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>