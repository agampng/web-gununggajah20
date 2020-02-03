<?php

namespace Modules\Wisata\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Articles\Models\Article;
use Modules\Wisata\Http\Requests\Store;
use Modules\Wisata\Http\Requests\Update;
use Modules\Wisata\Models\Wisata;
use Modules\Wisata\TableView\IndexTableView;

class WisataController extends Controller
{
    public function index()
    {
        $items = Wisata::autoSort()->latest()
            ->leftJoin('users as cb', 'cb.id', 'wisata.created_by')
            ->leftJoin('users as ub', 'ub.id', 'wisata.updated_by')
            ->select('cb.name as penulis', 'ub.name as editor', 'wisata.*')
            ->search(request('search'))->paginate();

        return (IndexTableView::make($items))->view('wisata::index');
    }

    public function create()
    {
        return view('wisata::create');
    }

    public function store(Store $request)
    {
//        Wisata::create($request->all());
        $gambar = $request->file('file');
        $namaGambar = time()."_".$gambar->getClientOriginalName();
        $dirGambar = 'uploadedImage';
        $gambar->move($dirGambar,$namaGambar);


        Wisata::create([
            'title' => $request->title,
            'status' => $request->status,
            'content' => $request->content,
            'file' => $namaGambar,
            'slug' => $request->title,
            'created_by' => auth()->user()->id,
            'nama_penyedia' => $request->nama_penyedia,
            'telepon_penyedia' => $request->telepon_penyedia,
            'email_penyedia' => $request->email_penyedia,
            'kategori_wisata' => $request->kategori_wisata,
        ]);

        return redirect()->route('wisatum.index')->withSuccess('Paket wisata berhasil disimpan');
    }

    public function show(Wisata $wisata)
    {
        return view('wisata::show', compact('wisata'));
    }

    public function edit(Wisata $wisata)
    {
        return view('wisata::edit', compact('wisata'));
    }

    public function update(Update $request,Wisata $wisata)
    {
        // $wisata->update($request->all());
        if ($request->file('file')) {
            $gambar = $request->file('file');
            $namaGambar = time()."_".$gambar->getClientOriginalName();
            $dirGambar = 'uploadedImage';
            $gambar->move($dirGambar,$namaGambar);
        } else {
            $namaGambar = $wisata->file;
        }

        $wisata->title = $request->title;
        $wisata->status = $request->status;
        $wisata->content = $request->content;
        $wisata->file = $namaGambar;
        $wisata->slug = $request->title;
        $wisata->updated_by = auth()->user()->id;
        $wisata->nama_penyedia = $request->nama_penyedia;
        $wisata->telepon_penyedia = $request->telepon_penyedia;
        $wisata->email_penyedia = $request->email_penyedia;
        $wisata->kategori_wisata = $request->kategori_wisata;

        $wisata->save();

        return redirect()->back()->withSuccess('Paket wisata berhasil diperbarui');
    }

    public function destroy(Wisata $wisata)
    {
        $wisata->delete();

        return redirect()->route('wisatum.index')->withSuccess('Paket wisata berhasil dihapus');
    }
}
