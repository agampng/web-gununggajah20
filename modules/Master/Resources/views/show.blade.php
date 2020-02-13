@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2> Detail</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('master.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    <table class="ui table definition">
        <tr><td>Id</td><td>{{ $master->id }}</td></tr>
        <tr><td>Title</td><td>{{ $master->title }}</td></tr>
        <tr><td>Content</td><td>{{ $master->content }}</td></tr>
        <tr><td>Status</td><td>{{ $master->status }}</td></tr>
        <tr><td>Gambar</td><td><img width="150px" src="{{ url('/uploadedImage/'.$master->gambar) }}"></td></tr>
        <tr><td>Slug</td><td>{{ $master->slug }}</td></tr>
        <tr><td>Created by</td><td>{{ $master->created_by }}</td></tr>
        <tr><td>Updated by</td><td>{{ $master->updated_by }}</td></tr>
        <tr><td>Created at</td><td>{{ $master->created_at }}</td></tr>
        <tr><td>Updated at</td><td>{{ $master->updated_at }}</td></tr>
    </table>

@stop
