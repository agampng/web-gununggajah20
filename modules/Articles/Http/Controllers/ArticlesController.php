<?php

namespace Modules\Articles\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Articles\Http\Requests\Store;
use Modules\Articles\Http\Requests\Update;
use Modules\Articles\Models\Article;
use Modules\Articles\TableView\IndexTableView;

class ArticlesController extends Controller
{
    public function index()
    {
        $items = Article::autoSort()->latest()
            ->leftJoin('users as cb', 'cb.id', 'articles.created_by')
            ->leftJoin('users as ub', 'ub.id', 'articles.updated_by')
            ->select('cb.name as penulis', 'ub.name as editor', 'articles.*')
            ->search(request('search'))->paginate();

        return (IndexTableView::make($items)->title('Artikel'))->view('article::index');
    }

    public function create()
    {
        return view('article::create');
    }

    public function store(Store $request)
    {
//        Article::create($request->all());

        $gambar = $request->file('gambar');
        $namaGambar = time()."_".$gambar->getClientOriginalName();
        $dirGambar = 'uploadedImage';
        $gambar->move($dirGambar,$namaGambar);

        Article::create([
            'title' => $request->title,
            'status' => $request->status,
            'content' => $request->content,
            'gambar' => $namaGambar,
            'slug' => $request->title,
            'created_by' => auth()->user()->id,
        ]);

        return redirect()->route('article.index')->withSuccess('Articles saved');
    }

    public function show(Article $article)
    {

        return view('article::show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('article::edit', compact('article'));
    }

    public function update(Update $request,Article $article)
    {
        if ($request->file('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time()."_".$gambar->getClientOriginalName();
            $dirGambar = 'uploadedImage';
            $gambar->move($dirGambar,$namaGambar);
        } else {
            $namaGambar = $article->gambar;
        }

        // Article::create([
        $article->title = $request->title;
        $article->status = $request->status;
        $article->content = $request->content;
        $article->gambar = $namaGambar;
        $article->slug = $request->title;
        $article->updated_by = auth()->user()->id;

        $article->save();

        return redirect()->back()->withSuccess(' saved');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')->withSuccess('Article deleted');
    }
}
