<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact-form.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'pesan' => 'required',
        //     'g-recaptcha-response' => 'required|captcha'
        // ]);
        // dd($request->validate());

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'pesan' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        // dd($validator->errors());

        if ($validator->fails()) {
            return Redirect('/#sectionContact')->with('error', 'Gagal dikirim');
        }

        $pesan = new Pesan;

        $pesan->name = $request->name;
        $pesan->email = $request->email;
        $pesan->pesan = $request->pesan;

        if($pesan->save()){
            return Redirect('/#sectionContact')->with('success', 'Berhasil dikirim');
        }

    }
}
