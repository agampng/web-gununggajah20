<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Articles\Models\Article;
use Modules\Wisata\Models\Wisata;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('home');
    }

    public function index()
    {
        $artikel = Article::latest()->limit(3)->where('status', 'Aktif')->get();
        $wisata = Wisata::latest()->limit(3)->where('status', 'Aktif')->get();

        VisitLog::save();
        return view('home', compact(['artikel','wisata']));

    }


}
