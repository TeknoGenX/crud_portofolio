<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Menampilkan daftar semua portofolio.
     */
    public function index()
    {
        $portofolios = Portfolio::latest()->get();
        return view('portfolios.index', compact('portofolios'));
    }

    /**
     * Menampilkan form untuk membuat portofolio baru.
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Menyimpan portofolio baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        Portfolio::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('portofolios.index')
                         ->with('success', 'Portofolio berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail portofolio berdasarkan ID.
     */
    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolios.show', compact('portfolio'));
    }

    /**
     * Menampilkan form untuk edit portofolio.
     */
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolios.edit', compact('portfolio'));
    }

    /**
     * Memperbarui portofolio di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('portofolios.index')
                         ->with('success', 'Portofolio berhasil diperbarui.');
    }

    /**
     * Menghapus portofolio dari database.
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->route('portofolios.index')
                         ->with('success', 'Portofolio berhasil dihapus.');
    }
}
