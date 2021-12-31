<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserProductController extends Controller
{
    public function index(){
        return view('index', [
            'produks' => Produk::all()->random(8)
        ]);
    }

    public function about(){
        return view('about');
    }

    public function detail_produk($id){
        return view('detail', [
            'produk' => Produk::find($id)
        ]);
    }

    public function semua(){
        return view('all', [
            'produks' => Produk::latest()->paginate(12)
        ]);
    }
}
