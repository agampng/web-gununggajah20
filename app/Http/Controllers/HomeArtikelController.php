<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Articles\Models\Article;

class HomeArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('status', 'Aktif')->latest()
            ->take(12)->get();
        $articlesTop = $articles->first();
        $articlesRight = $articles->slice(4)->take(9);
        $articlesLeft = $articles->slice(1)->take(3);

        return view('artikel.index')->with('top', $articlesTop)
        ->with('left', $articlesLeft)
        ->with('right', $articlesRight);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Article::where('slug', $slug)->firstOrFail();

        $articles = Article::where('status', 'Aktif')->whereNotIn('slug', [$slug])->latest()
            ->take(5)->get();
        return view('artikel.show')->with('post', $post)->with('articles', $articles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
