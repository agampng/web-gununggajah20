@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2> Detail</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('wisatum.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    <table class="ui table definition">
        <tr><td>Id</td><td>{{ $->id }}</td></tr>
        <tr><td>Title</td><td>{{ $->title }}</td></tr>
        <tr><td>Content</td><td>{{ $->content }}</td></tr>
        <tr><td>Status</td><td>{{ $->status }}</td></tr>
        <tr><td>Slug</td><td>{{ $->slug }}</td></tr>
        <tr><td>File</td><td>{{ $->file }}</td></tr>
        <tr><td>Nama penyedia</td><td>{{ $->nama_penyedia }}</td></tr>
        <tr><td>Telepon penyedia</td><td>{{ $->telepon_penyedia }}</td></tr>
        <tr><td>Email penyedia</td><td>{{ $->email_penyedia }}</td></tr>
        <tr><td>Kategori wisata</td><td>{{ $->kategori_wisata }}</td></tr>
        <tr><td>Created by</td><td>{{ $->created_by }}</td></tr>
        <tr><td>Updated by</td><td>{{ $->updated_by }}</td></tr>
        <tr><td>Created at</td><td>{{ $->created_at }}</td></tr>
        <tr><td>Updated at</td><td>{{ $->updated_at }}</td></tr>
    </table>

@stop
