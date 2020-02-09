@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2> Detail</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('pesan.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    <table class="ui table definition">
        <tr><td>Id</td><td>{{ $pesan->id }}</td></tr>
        {{-- <tr><td>Title</td><td>{{ $pesan->title }}</td></tr> --}}
        {{-- <tr><td>Content</td><td>{{ $pesan->content }}</td></tr> --}}
        {{-- <tr><td>Status</td><td>{{ $pesan->status }}</td></tr> --}}
        {{-- <tr><td>Gambar</td><td><img width="150px" src="{{ url('/uploadedImage/'.$pesan->gambar) }}"></td></tr> --}}
        {{-- <tr><td>Slug</td><td>{{ $pesan->slug }}</td></tr> --}}
        {{-- <tr><td>Created by</td><td>{{ $pesan->created_by }}</td></tr> --}}
        {{-- <tr><td>Updated by</td><td>{{ $pesan->updated_by }}</td></tr> --}}
        <tr><td>Created at</td><td>{{ $pesan->created_at }}</td></tr>
        <tr><td>Updated at</td><td>{{ $pesan->updated_at }}</td></tr>
    </table>

@stop
