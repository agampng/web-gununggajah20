@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Galeri</h2>
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
        {!! SemanticForm::post()->action(route('setting.galeri.store'))->multipart() !!}
        {!! SemanticForm::bind($settings)->post() !!}
        {!! SemanticForm::imageEditor('galeri1', 'Galeri 1', ['required' => true]) !!}
        {!! SemanticForm::imageEditor('galeri2', 'Galeri 2') !!}
        {!! SemanticForm::imageEditor('galeri3', 'Galeri 3') !!}
        {!! SemanticForm::imageEditor('galeri4', 'Galeri 4') !!}
        {!! SemanticForm::imageEditor('galeri5', 'Galeri 5') !!}
        {!! SemanticForm::imageEditor('galeri6', 'Galeri 6') !!}
        {!! SemanticForm::imageEditor('galeri7', 'Galeri 7') !!}
        {!! SemanticForm::imageEditor('galeri8', 'Galeri 8') !!}
        {!! SemanticForm::submit('Simpan') !!}
        {!! SemanticForm::link('Batalkan', route('article.index')) !!}
        {!! SemanticForm::close() !!}
    </div>

@stop
