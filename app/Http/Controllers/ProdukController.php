<?php

namespace App\Http\Controllers;

use App\Models\Produk;  // Import Model Produk
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data produk dari database
        $produk = Produk::all();
        // Mengembalikan view dengan data produk
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk menambah produk baru
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari user
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        // Menyimpan data produk ke database
        Produk::create($validated);

        // Redirect ke halaman daftar produk
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Menampilkan produk berdasarkan ID
        $produk = Produk::findOrFail($id);
        // Mengembalikan view dengan data produk
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Menampilkan produk yang akan diedit berdasarkan ID
        $produk = Produk::findOrFail($id);
        // Mengembalikan view untuk edit produk
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input dari user
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        // Mengambil produk berdasarkan ID
        $produk = Produk::findOrFail($id);
        // Mengupdate data produk
        $produk->update($validated);

        // Redirect ke halaman daftar produk
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Mengambil produk berdasarkan ID
        $produk = Produk::findOrFail($id);
        // Menghapus produk dari database
        $produk->delete();

        // Redirect ke halaman daftar produk
        return redirect()->route('produk.index');
    }
}
