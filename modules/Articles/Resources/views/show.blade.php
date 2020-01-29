@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2> Detail</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('article.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    <table class="ui table definition">
        <tr><td>Id</td><td>{{ $article->id }}</td></tr>
        <tr><td>Title</td><td>{{ $article->title }}</td></tr>
        <tr><td>Content</td><td>{{ $article->content }}</td></tr>
        <tr><td>Status</td><td>{{ $article->status }}</td></tr>
        <tr><td>Gambar</td><td><img width="150px" src="{{ url('/uploadedImage/'.$article->gambar) }}"></td></tr>
        <tr><td>Slug</td><td>{{ $article->slug }}</td></tr>
        <tr><td>Created by</td><td>{{ $article->created_by }}</td></tr>
        <tr><td>Updated by</td><td>{{ $article->updated_by }}</td></tr>
        <tr><td>Created at</td><td>{{ $article->created_at }}</td></tr>
        <tr><td>Updated at</td><td>{{ $article->updated_at }}</td></tr>
    </table>

@stop
