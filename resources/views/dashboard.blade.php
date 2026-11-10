@extends('layouts.app')

@section('title', 'Dashboard | PinkBakery')

@section('content')
<div class="container page-container">
    <section class="welcome-banner">
        <div>
            <p class="eyebrow">PINKBAKERY MANAGEMENT</p>
            <h1>Halo, {{ $username }}! ♡</h1>
            <p>Selamat datang kembali. Yuk, cek perkembangan toko bakery hari ini.</p>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-pink mt-2">Lihat Produk →</a>
        </div>
        <div class="welcome-decoration">🧁</div>
    </section>

    <div class="section-heading">
        <div>
            <p class="eyebrow">OVERVIEW</p>
            <h2>Ringkasan Toko</h2>
        </div>
        <span class="date-label">{{ date('d M Y') }}</span>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-icon">🧁</div>
                <p>Total Produk</p>
                <h3>{{ $totalProduk }}</h3>
                <small>Produk tersedia di toko</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-icon">♡</div>
                <p>Nama Pengelola</p>
                <h3 class="stat-name">{{ $username }}</h3>
                <small>Pengelola PinkBakery</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-icon">✨</div>
                <p>Status Toko</p>
                <h3 class="stat-name">Aktif</h3>
                <small>Siap melayani pelanggan</small>
            </div>
        </div>
    </div>

    <section class="dashboard-bottom">
        <div>
            <p class="eyebrow">OUR LITTLE BAKERY</p>
            <h2>Made with love, baked with happiness.</h2>
            <p>Kelola produk bakery dengan lebih mudah melalui PinkBakery.</p>
        </div>
        <div class="cake-decoration">🍰</div>
    </section>
</div>
@endsection