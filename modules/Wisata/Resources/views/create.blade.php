@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Tambah Paket Wisata </h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('wisatum.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    {!! SemanticForm::open()->post()->action(route('wisatum.store'))->multipart() !!}
    {!! SemanticForm::text('title')->label('Judul')->required() !!}
    <label class="required"><b>Konten</b></label>
    {!! form()->redactor('content') !!}
    <div class="ui divider hidden"></div>
    {!! SemanticForm::imageEditor('file', 'Gambar Judul', ['required' => true]) !!}
    {!! SemanticForm::text('nama_penyedia')->label('Nama Penyedia')->required() !!}
    {!! SemanticForm::text('telepon_penyedia')->label('Telepon Penyedia')->required() !!}
    {!! SemanticForm::text('email_penyedia')->label('Email Penyedia') !!}
    {!! SemanticForm::select('kategori_wisata', ['edukasi' => 'Edukasi', 'studi_banding' => 'Studi Banding', 'perkemahan' => 'Perkemahan'])->label('Kategori Wisata')->required() !!}
    {!! SemanticForm::select('status', ['Tidak Aktif' => 'Tidak Aktif', 'Aktif' => 'Aktif'])->label('Status')->required() !!}
    {!! form()->action([
        form()->submit('Save'),
        form()->link('Cancel', route('wisatum.index'))
    ]) !!}
    {!! form()->close() !!}

@stop
