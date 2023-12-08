<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        return view('customer.barang.index');
    }
    public function history(){
        return view('customer.history');
    }
    public function keranjang(){
        return view('customer.keranjang');
    }
}
