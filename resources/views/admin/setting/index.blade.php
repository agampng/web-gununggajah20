@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Gambar Utama</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('article.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>

    <div class="ui segment attached">
        {!! SemanticForm::post()->action(route('setting.background.store'))->multipart() !!}
        {!! SemanticForm::bind($settings)->post() !!}
        {!! SemanticForm::imageEditor('gambar1', 'Gambar Judul', ['required' => true]) !!}
        {!! SemanticForm::imageEditor('gambar2', 'Gambar Judul') !!}
        {!! SemanticForm::imageEditor('gambar3', 'Gambar Judul') !!}
        {!! SemanticForm::imageEditor('gambar4', 'Gambar Judul') !!}
        {!! SemanticForm::submit('Simpan') !!}
        {!! SemanticForm::link('Batalkan', route('article.index')) !!}
        {!! SemanticForm::close() !!}
    </div>

@stop
