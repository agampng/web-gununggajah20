@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Balas kritik/saran</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('pesan.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>
    <div class="ui segment attached">
    {!! SemanticForm::open()->put()->action(route('pesan.update', $pesan))->multipart() !!}
    {{-- {!! SemanticForm::bind($pesan)->post() !!} --}}
    {{-- {!! SemanticForm::text('title')->label('Judul')->required() !!}
    {!! SemanticForm::imageEditor('gambar', 'Gambar Judul', ['required' => true]) !!} --}}
    {{-- {!! SemanticForm::uploader('gambar')->limit(10)->extensions(['jpg', 'png'])->label('judul') !!} --}}
    {{-- {!! form()->uploader('attachments')->limit(10)->extensions(['jpg', 'png'])->label('Attachments') !!} --}}
    {{-- <label class="required"><b>Konten</b></label>
    {!! form()->redactor('content') !!}
    <div class="ui divider hidden"></div> --}}
    {!! SemanticForm::submit('Simpan') !!}
    {!! SemanticForm::link('Batalkan', route('pesan.index')) !!}
    {!! SemanticForm::close() !!}

    </div>

@stop
