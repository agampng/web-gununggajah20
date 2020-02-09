<?php

namespace Modules\Pesan\Http\Controllers;

use App\Reply;
use Illuminate\Routing\Controller;
use Modules\Pesan\Http\Requests\Store;
use Modules\Pesan\Http\Requests\Update;
use Modules\Pesan\Models\Pesan;
use Modules\Pesan\TableView\IndexTableView;

class PesanController extends Controller
{
    public function index()
    {
        $items = Pesan::autoSort()->latest()
            ->search(request('search'))->paginate();

        return (IndexTableView::make($items)->title('Kritik / Saran'))->view('pesan::index');
    }

    public function create()
    {
        return view('pesan::create');
    }

    public function store(Store $request)
    {
//        Pesan::create($request->all());

        $gambar = $request->file('gambar');
        $tmpNamaGambar = str_slug($gambar->getClientOriginalName(), '-');
        $namaGambar = time()."_".$tmpNamaGambar;
        $dirGambar = 'uploadedImage';
        $gambar->move($dirGambar,$namaGambar);

        $slug = str_slug($request->title, '-');

        Pesan::create([
            'title' => $request->title,
            'status' => $request->status,
            'content' => $request->content,
            'gambar' => $namaGambar,
            'slug' => $slug,
            'created_by' => auth()->user()->id,
        ]);

        return redirect()->route('Pesan.index')->withSuccess('Artikel berhasil disimpan');
    }

    public function show(Pesan $pesan)
    {
        $replies = Reply::where('pesan_id', $pesan->id)->get();

        return view('pesan::show', compact('pesan', 'replies'));
    }

    public function edit(Pesan $pesan)
    {
        return view('pesan::edit', compact('pesan'));
    }

    public function update(Update $request,Pesan $pesan)
    {
        // dd($pesan);

        $reply = new Reply;
        $reply->reply = $request->reply;
        $reply->pesan_id = $pesan->id;
        $reply->user_id = auth()->user()->id;

        $reply->save();

        event(new \App\Events\ReplySubmitted($reply));

        return redirect()->back()->withSuccess('Artikel berhasil diperbarui');
    }

    public function destroy(Pesan $pesan)
    {
        $pesan->delete();

        return redirect()->route('pesan.index')->withSuccess('Pesan berhasil dihapus');
    }
}
