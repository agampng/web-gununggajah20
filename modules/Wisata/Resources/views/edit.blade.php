@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Edit </h2>
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
        {!! form()->bind($)->put(route('wisatum.update', $->getKey()))->multipart() !!}
        {!! form()->textarea('title')->label('Title') !!}
        {!! form()->textarea('content')->label('Content') !!}
        {!! form()->text('status')->label('Status') !!}
        {!! form()->text('slug')->label('Slug') !!}
        {!! form()->text('file')->label('File') !!}
        {!! form()->text('nama_penyedia')->label('Nama penyedia') !!}
        {!! form()->text('telepon_penyedia')->label('Telepon penyedia') !!}
        {!! form()->text('email_penyedia')->label('Email penyedia') !!}
        {!! form()->text('kategori_wisata')->label('Kategori wisata') !!}
        {!! form()->text('created_by')->label('Created by') !!}
        {!! form()->text('updated_by')->label('Updated by') !!}
        <div class="ui divider hidden"></div>
        {!! form()->action([
            form()->submit('Save'),
            form()->link('Cancel', route('wisatum.index'))
        ]) !!}

        {!! form()->close() !!}
    </div>

@stop
