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
        $items = Article::autoSort()->latest()->search(request('search'))->paginate();

        return (IndexTableView::make($items))->view('article::index');
    }

    public function create()
    {
        return view('article::create');
    }

    public function store(Store $request)
    {
        Article::create($request->all());

        return redirect()->route('article.index')->withSuccess('Articles saved');
    }

    public function show(Article $article)
    {
        return view('article::show', compact('article'));
    }

    public function edit(Articles $article)
    {
        return view('article::edit', compact('article'));
    }

    public function update(Update $request,Articles $article)
    {
        $article->update($request->all());

        return redirect()->back()->withSuccess(' saved');
    }

    public function destroy(Articles $article)
    {
        $article->delete();

        return redirect()->route('article.index')->withSuccess(' deleted');
    }
}
