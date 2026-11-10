<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
        ]);

        $username = $request->input('username');

        return redirect()->route('dashboard', [
            'username' => $username
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');
        $totalProduk = 6;

        return view('dashboard', compact('username', 'totalProduk'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');

        $produk = [
            [
                'nama' => 'Strawberry Cake',
                'kategori' => 'Cake',
                'harga' => 45000,
                'stok' => 12,
                'gambar' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=500'
            ],
            [
                'nama' => 'Chocolate Croissant',
                'kategori' => 'Pastry',
                'harga' => 25000,
                'stok' => 15,
                'gambar' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=500'
            ],
            [
                'nama' => 'Strawberry Donut',
                'kategori' => 'Donut',
                'harga' => 15000,
                'stok' => 20,
                'gambar' => 'https://images.unsplash.com/photo-1551024506-0bccd828d307?w=500'
            ],
            [
                'nama' => 'Blueberry Muffin',
                'kategori' => 'Muffin',
                'harga' => 18000,
                'stok' => 10,
                'gambar' => 'https://images.unsplash.com/photo-1607958996333-41aef7caefaa?w=500'
            ],
            [
                'nama' => 'Vanilla Cupcake',
                'kategori' => 'Cupcake',
                'harga' => 12000,
                'stok' => 18,
                'gambar' => 'https://images.unsplash.com/photo-1486427944299-d1955d23e34d?w=500'
            ],
            [
                'nama' => 'Fresh Bread',
                'kategori' => 'Bread',
                'harga' => 20000,
                'stok' => 25,
                'gambar' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?w=500'
            ],
        ];

        return view('pengelolaan', compact('produk', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');

        return view('profile', compact('username'));
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}