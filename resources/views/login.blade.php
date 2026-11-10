@extends('layouts.app')

@section('title', 'Login | PinkBakery')

@section('content')
<div class="login-wrapper">
    <div class="login-card">
        <div class="login-icon">♡</div>
        <p class="eyebrow">WELCOME TO</p>
        <h1>PinkBakery</h1>
        <p class="text-muted">Masuk untuk mengelola toko bakery kesayanganmu.</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <label for="username" class="form-label">Username</label>
            <input
                type="text"
                class="form-control custom-input"
                id="username"
                name="username"
                placeholder="Masukkan username kamu"
                value="{{ old('username') }}"
                required
            >

            <button type="submit" class="btn btn-pink w-100 mt-4">
                Masuk Sekarang →
            </button>
        </form>

        <p class="login-note">Simple bakery management, made with love ♡</p>
    </div>
</div>
@endsection