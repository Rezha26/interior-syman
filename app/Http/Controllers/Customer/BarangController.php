<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::orderBy('created_at','desc')->get();
        return view('customer.barang.index', compact('barang'));
    }
}
