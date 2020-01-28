<?php

namespace Modules\Wisata\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Wisata\Http\Requests\Store;
use Modules\Wisata\Http\Requests\Update;
use Modules\Wisata\Models\Wisata;
use Modules\Wisata\TableView\IndexTableView;

class WisataController extends Controller
{
    public function index()
    {
        $items = Wisata::autoSort()->latest()->search(request('search'))->paginate();

        return (IndexTableView::make($items))->view('wisata::index');
    }

    public function create()
    {
        return view('wisata::create');
    }

    public function store(Store $request)
    {
        Wisata::create($request->all());

        return redirect()->route('wisatum.index')->withSuccess(' saved');
    }

    public function show(Wisata $wisata)
    {
        return view('wisata::show', compact(''));
    }

    public function edit(Wisata $wisata)
    {
        return view('::edit', compact(''));
    }

    public function update(Update $request,Wisata $wisata)
    {
        $wisata->update($request->all());

        return redirect()->back()->withSuccess(' saved');
    }

    public function destroy(Wisata $wisata)
    {
        $wisata->delete();

        return redirect()->route('wisatum.index')->withSuccess(' deleted');
    }
}
