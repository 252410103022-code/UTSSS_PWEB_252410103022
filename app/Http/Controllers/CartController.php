<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    private array $products = [
        'bread' => [
            'name' => 'Fresh Bread',
            'price' => 15000,
        ],
        'cake' => [
            'name' => 'Chocolate Cake',
            'price' => 35000,
        ],
        'pastry' => [
            'name' => 'Sweet Pastry',
            'price' => 20000,
        ],
    ];

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|string',
        ]);

        $id = $request->input('product_id');

        if (!isset($this->products[$id])) {
            return back()->with('error', 'Produk tidak ditemukan.');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $this->products[$id]['name'],
                'price' => $this->products[$id]['price'],
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart', compact('cart', 'total'));
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        unset($cart[$id]);

        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Produk berhasil dihapus.');
    }
}