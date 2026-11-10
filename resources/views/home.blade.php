<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PinkBakery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-pink">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">PinkBakery ♡</a>
        <div class="navbar-nav ms-auto align-items-center">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('menu') }}">Menu</a>
            <a class="nav-link" href="{{ route('profile') }}">Profile</a>
            <form action="{{ route('logout') }}" method="POST" class="ms-2">
                @csrf
                <button class="btn btn-pink" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>
<div class="container home-content text-center">
    <h1>Welcome to PinkBakery!</h1>
    <h4>Freshly Baked, Made with Love ♡</h4>
    <p class="mt-3">Temukan berbagai pilihan roti dan kue lezat yang dibuat khusus untukmu.</p>
    <img class="bakery-image" src="https://images.unsplash.com/photo-1509440159596-0249088772ff?w=1200" alt="Fresh Bakery">
    <div class="mt-4">
        <a href="{{ route('menu') }}" class="btn btn-pink">Lihat Menu Kami</a>
    </div>
</div>
</body>
</html>