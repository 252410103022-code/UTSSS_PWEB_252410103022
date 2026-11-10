@extends('layouts.app')

@section('title', 'Profile | PinkBakery')

@section('content')
<div class="container page-container">
    <div class="page-heading text-center">
        <p class="eyebrow">PERSONAL INFORMATION</p>
        <h1>My Profile ♡</h1>
        <p>Informasi pengelola toko PinkBakery.</p>
    </div>

    <div class="profile-card">
        <div class="profile-avatar">♡</div>
        <h2>{{ $username }}</h2>
        <p class="text-muted">Pengelola PinkBakery</p>

        <div class="profile-detail">
            <span>Username</span>
            <strong>{{ $username }}</strong>
        </div>
        <div class="profile-detail">
            <span>Nama Website</span>
            <strong>PinkBakery</strong>
        </div>
        <div class="profile-detail">
            <span>Status</span>
            <strong class="status-active">Aktif</strong>
        </div>

        <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn btn-pink w-100 mt-4">
            Kembali ke Dashboard
        </a>
    </div>
</div>
@endsection