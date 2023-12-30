<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class ManagementBarangController extends Controller
{
    public function index(Request $request)
    {
        $barang = Barang::all();
        return view('admin.barang.index', compact('barang'));
    }
    public function create()
    {
        return view('admin.barang.create');
    }
    public function store(Request $request)
    {
        $attrs = $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'stock' => 'required',
            'harga' => 'required',
            'gambar' => 'required|file',
        ]);

        // Mendapatkan nama file dengan hash
        $imageName = $request->file('gambar')->hashName();
        $request->file('gambar')->storeAs('public/asset/produk', $imageName);
        Barang::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'stock' => $request->stock,
            'harga' => $request->harga,
            'gambar' => $imageName, 
        ]);

        return redirect()
            ->route('management-barang.index')
            ->with('success', 'berhasil');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('admin.barang.edit', compact('barang'));
    }
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        if (!$barang) {
            return redirect()->route('management-barang.index');
        }
        $attrs = $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'stock' => 'required',
            'harga' => 'required',
        ]);
        $barang->name = $attrs['name'];
        $barang->deskripsi = $attrs['deskripsi'];
        $barang->stock = $attrs['stock'];
        $barang->harga = $attrs['harga'];
        $barang->save();
        return redirect()
            ->route('management-barang.index')
            ->with('success', 'berhasil');
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        if (!$barang) {
            return redirect()->route('management-barang.index');
        }
        $barang->delete();
        return redirect()
            ->route('management-barang.index')
            ->with('success', 'berhasil');
    }
}
