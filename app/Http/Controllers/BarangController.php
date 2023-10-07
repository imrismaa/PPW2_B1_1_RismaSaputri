<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;

class BarangController extends Controller
{
    public function index()
    {
        $data_barang = BarangModel::all();
        return view('barang.index', compact('data_barang'));
    }
}
