<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang - PinkBakery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-pink">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">PinkBakery ♡</a>
        <div class="navbar-nav align-items-center">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('menu') }}">Menu</a>
            <a class="nav-link active" href="{{ route('cart') }}">Keranjang</a>
            <a class="nav-link" href="{{ route('profile') }}">Profile</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-pink" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container py-5">
    <h1 class="text-center menu-title mb-4">My Shopping Cart ♡</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (count($cart) > 0)
        <div class="cart-card">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $id => $item)
                            <tr>
                                <td>{{ $item['name'] }}</td>
                                <td>Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                                <td>
                                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="text-end mt-3">
                <h4>Total: <strong class="total-price">Rp{{ number_format($total, 0, ',', '.') }}</strong></h4>
                <a href="{{ route('menu') }}" class="btn btn-outline-secondary mt-2">Tambah Produk</a>
            </div>
        </div>
    @else
        <div class="empty-cart">
            <h3>Keranjang masih kosong ♡</h3>
            <p>Yuk, pilih roti dan kue favoritmu!</p>
            <a href="{{ route('menu') }}" class="btn btn-pink">Lihat Menu</a>
        </div>
    @endif
</div>

</body>
</html>