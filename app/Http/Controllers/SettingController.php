<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Rnameesponse
     */
    // public function __invoke(Request $request)
    // {
    //     return view('home');
    // }

    // background
    public function index()
    {
        $settings['gambar1'] = setting('gambar1');
        $settings['gambar2'] = setting('gambar2');
        $settings['gambar3'] = setting('gambar3');
        $settings['gambar4']  = setting('gambar4');

        return view('admin.setting.index', compact('settings'));
    }

    public function galeriIndex()
    {
        $settings['galeri1'] = setting('galeri1');
        $settings['galeri2'] = setting('galeri2');
        $settings['galeri3'] = setting('galeri3');
        $settings['galeri4'] = setting('galeri4');
        $settings['galeri5'] = setting('galeri5');
        $settings['galeri6'] = setting('galeri6');
        $settings['galeri7'] = setting('galeri7');
        $settings['galeri8'] = setting('galeri8');

        return view('admin.setting.galeri', compact('settings'));
    }

    public function bgStore(Request $request)
    {
        $gambar['gambar1'] = $request->gambar1;
        $gambar['gambar2'] = $request->gambar2;
        $gambar['gambar3'] = $request->gambar3;
        $gambar['gambar4'] = $request->gambar4;
        $data = $request->except('_token');
        foreach($data as $gambar) {
            foreach($gambar as $key => $value) {
                if ($value == null || $value == '[]') {
                    $fileName = setting($key);
                    $image_path = "uploadedImage/" . $fileName;
                    if(File::exists($image_path)) {
                        File::delete($image_path);
                    }
                    DB::table('settings')->where('key', $key)->delete();
                } elseif ($request->file($key)) {
                    $gambar = $request->file($key);
                    $tmpNamaGambar = str_slug($gambar->getClientOriginalName(), '-');
                    $namaGambar = time()."_".$tmpNamaGambar;
                    $dirGambar = 'uploadedImage';
                    $gambar->move($dirGambar,$namaGambar);
            
                    setting([$key => $namaGambar])->save();
                }
            }
        }

        return redirect()->route('setting.background')->withSuccess('Gambar berhasil diperbarui');
    }

    public function galeriStore(Request $request)
    {
        $gambar['galeri1'] = $request->gambar1;
        $gambar['galeri2'] = $request->gambar2;
        $gambar['galeri3'] = $request->gambar3;
        $gambar['galeri4'] = $request->gambar4;
        $gambar['gambar5'] = $request->gambar5;
        $gambar['gambar6'] = $request->gambar6;
        $gambar['gambar7'] = $request->gambar7;
        $gambar['gambar8'] = $request->gambar8;
        $data = $request->except('_token');
        foreach($data as $gambar) {
            foreach($gambar as $key => $value) {
                if ($value == null || $value == '[]') {
                    $fileName = setting($key);
                    $image_path = "uploadedImage/" . $fileName;
                    if(File::exists($image_path)) {
                        File::delete($image_path);
                    }
                    DB::table('settings')->where('key', $key)->delete();
                } elseif ($request->file($key)) {
                    $gambar = $request->file($key);
                    $tmpNamaGambar = str_slug($gambar->getClientOriginalName(), '-');
                    $namaGambar = time()."_".$tmpNamaGambar;
                    $dirGambar = 'uploadedImage';
                    $gambar->move($dirGambar,$namaGambar);
            
                    setting([$key => $namaGambar])->save();
                }
            }
        }

        return redirect()->route('setting.galeri')->withSuccess('Gambar berhasil diperbarui');
    }
    // footer
    public function footerIndex()
    {
        $footer  = setting('footer');

        return view('admin.setting.footer', compact('footer'));   
    }

    public function footerStore(Request $request)
    {
        $data = $request->except('_token');
        foreach($data as $key=> $value) {
            setting([$key => $value])->save();

        }
        return redirect()->route('setting.footer')->withSuccess('Gambar berhasil diperbarui');
    }
}
