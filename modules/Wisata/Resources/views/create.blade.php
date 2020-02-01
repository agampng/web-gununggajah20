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

    <div class="ui segment attached">
        {!! SemanticForm::open()->post()->action(route('wisatum.store'))->multipart() !!}
        {!! SemanticForm::text('title')->label('Nama Wisata')->required() !!}
        {!! SemanticForm::text('kategori_wisata')->label('Nama Paket Wisata')->required() !!}
        {!! SemanticForm::imageEditor('file', 'Gambar Judul', ['required' => true]) !!}
        <label class="required"><b>Konten</b></label>
        {!! form()->redactor('content') !!}
        <div class="ui divider hidden"></div>
        {!! SemanticForm::text('nama_penyedia')->label('Nama Penyedia')->required() !!}
        {!! SemanticForm::text('telepon_penyedia')->label('Telepon Penyedia')->required() !!}
        {!! SemanticForm::text('email_penyedia')->label('Email Penyedia') !!}
        {!! SemanticForm::select('status', ['Tidak Aktif' => 'Tidak Aktif', 'Aktif' => 'Aktif'])->label('Status')->required() !!}
        <div class="ui divider hidden"></div>
        {!! form()->action([
            form()->submit('Save'),
            form()->link('Cancel', route('wisatum.index'))
        ]) !!}
        {!! form()->close() !!}
    </div>

@stop
