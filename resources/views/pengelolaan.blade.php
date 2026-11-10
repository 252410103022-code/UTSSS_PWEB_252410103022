@extends('layouts.app')

@section('title', 'Pengelolaan Produk | PinkBakery')

@section('content')
<div class="container page-container">
    <div class="page-heading">
        <p class="eyebrow">PINKBAKERY MANAGEMENT</p>
        <h1>Pengelolaan Produk ♡</h1>
        <p>Daftar produk yang tersedia di toko PinkBakery.</p>
    </div>

    <div class="product-summary">
        <span>🧁 Total produk tersedia</span>
        <strong>{{ count($produk) }} Produk</strong>
    </div>

    <div class="row g-4">
        @foreach ($produk as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="product-card">
                    <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}" class="product-image">
                    <div class="product-info">
                        <span class="product-category">{{ $item['kategori'] }}</span>
                        <h4>{{ $item['nama'] }}</h4>
                        <p class="product-price">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                        <div class="product-stock">
                            <span>Stok tersedia</span>
                            <strong>{{ $item['stok'] }} pcs</strong>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection