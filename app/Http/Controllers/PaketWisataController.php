<?php

namespace App\Http\Controllers;

use App\Wisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function index(){
        $paketWisata = Wisata::where('status', 'Aktif')->latest()
            ->take(12)->get();

        return view('paketwisata.index')->with('paketWisata', $paketWisata);
    }

    public function show($slug){
        $post = Wisata::where('slug', $slug)->firstOrFail();

        $paketWisata = Wisata::where('status', 'Aktif')->whereNotIn('slug', [$slug])->latest()
            ->take(5)->get();
        return view('paketwisata.show')->with('post', $post)->with('paketWisata', $paketWisata);
    }
}
