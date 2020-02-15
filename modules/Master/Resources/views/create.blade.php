@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Tambah Data </h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('master.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>

    <div class="ui segment attached">
        {!! SemanticForm::open()->post()->action(route('master.store'))->multipart() !!}
        {!! SemanticForm::text('title')->label('Judul')->required() !!}
        {!! SemanticForm::imageEditor('image', 'Gambar', ['required' => true]) !!}
        <label class="required"><b>Konten</b></label>
        {!! form()->redactor('content') !!}
        <div class="ui divider hidden"></div>
        {!! SemanticForm::select('page', $page)->label('Tampilkan di halaman')->required() !!}
        <div class="ui divider hidden"></div>
        {!! SemanticForm::submit('Simpan') !!}
        {!! SemanticForm::link('Batalkan', route('master.index')) !!}
        {!! SemanticForm::close() !!}
    </div>

@stop
