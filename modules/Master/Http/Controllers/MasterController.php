<?php

namespace Modules\Master\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Master\Http\Requests\Store;
use Modules\Master\Http\Requests\Update;
use Modules\Master\Models\Master;
use Modules\Master\TableView\IndexTableView;
use App\Enums\PageView;

class MasterController extends Controller
{
    public function index()
    {
        $items = Master::autoSort()->latest()
            ->search(request('search'))->paginate();

        return (IndexTableView::make($items)->title('Master Data'))->view('master::index');
    }

    public function create()
    {
        $page = PageView::toTitleCase();

        return view('master::create', compact('page'));
    }

    public function store(Store $request)
    {
//        Master::create($request->all());

        $gambar = $request->file('gambar');
        $tmpNamaGambar = str_slug($gambar->getClientOriginalName(), '-');
        $namaGambar = time()."_".$tmpNamaGambar;
        $dirGambar = 'uploadedImage';
        $gambar->move($dirGambar,$namaGambar);

        $slug = str_slug($request->title, '-');

        Master::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $namaGambar,
            'slug' => $slug,
            'page' => $request->page,
        ]);

        return redirect()->route('master.index')->withSuccess('Data berhasil disimpan');
    }

    public function show(Master $master)
    {

        return view('master::show', compact('master'));
    }

    public function edit(Master $master)
    {
        $page = PageView::toTitleCase();

        return view('master::edit', compact('master', 'page'));
    }

    public function update(Update $request,Master $master)
    {
        if ($request->file('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time()."_".$gambar->getClientOriginalName();
            $dirGambar = 'uploadedImage';
            $gambar->move($dirGambar,$namaGambar);
        } else {
            $namaGambar = $master->image;
        }

        $slug = str_slug($request->title, '-');

        $master->title = $request->title;
        $master->content = $request->content;
        $master->image = $namaGambar;
        $master->slug = $slug;
        $master->page = $request->page;

        $master->save();

        return redirect()->back()->withSuccess('Data berhasil diperbarui');
    }

    public function destroy(Master $master)
    {
        $master->delete();

        return redirect()->route('master.index')->withSuccess('Data berhasil dihapus');
    }
}
