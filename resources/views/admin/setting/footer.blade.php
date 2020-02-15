@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Footer</h2>
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
        {!! SemanticForm::post()->action(route('setting.footer.store'))->multipart() !!}
        {!! SemanticForm::bind($footer)->post() !!}
        <label class="required"><b>Konten</b></label>
        {!! form()->redactor('footer', $footer) !!}
        {!! SemanticForm::submit('Simpan') !!}
        {!! SemanticForm::link('Batalkan', route('article.index')) !!}
        {!! SemanticForm::close() !!}
    </div>

@stop
