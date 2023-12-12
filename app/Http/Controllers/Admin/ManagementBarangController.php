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
        return view('admin.barang.index',compact('barang'));
    }
    public function create()
    {
        return view('admin.barang.create');
    }
    public function store(Request $request)
    {
        // dd($request->harga);
        Barang::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'stock' => $request->stock,
            'harga' => $request->harga,
        ]);
    }

    public function edit($id){
        $barang = Barang::find($id);
        return view('admin.barang.edit',compact('barang'));

    }
    public function update($id){
        $barang = Barang::find($id);
        dd($barang);
    }
}
