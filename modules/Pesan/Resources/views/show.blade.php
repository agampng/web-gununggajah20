@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Balas kritik / saran</h2>
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
        <tr><td>Pengirim</td><td>{{ $pesan->name }}</td></tr>
        <tr><td>Alamat email</td><td>{{ $pesan->email }}</td></tr>
        <tr><td>Kritik / Saran</td><td>{{ $pesan->pesan }}</td></tr>
        <tr><td>Tanggal</td><td>{{ $pesan->created_at_present }}</td></tr>
    </table>

    <div class="ui segment attached">
        <h3>Balasan</h3>
        @foreach ($replies as $reply)
        <table class="ui table definition">
            <tr><td>Pesan</td><td>{{ $reply->reply }}</td></tr>
            <tr><td>Tanggal</td><td>{{ $reply->created_at_present }}</td></tr>
            <tr><td>Dikirim oleh</td><td>{{ $reply->createdBy->name }}</td></tr>
        </table>
        @endforeach
    </div>
    <div class="ui divider hidden"></div>
    <div class="ui segment attached">
        {!! SemanticForm::open()->post()->action(route('pesan.update', $pesan))->multipart() !!}
        {!! SemanticForm::textarea('reply')->label('Balas kritik / saran')->required() !!}
        <small style="color: #7A7A7A;">
            <i class="info circle icon"></i>
            Pesan akan dikirimkan melalui email
        </small>
        <div class="ui divider hidden"></div>
        {!! SemanticForm::submit('Kirim') !!}
        {!! SemanticForm::link('Batalkan', route('pesan.index')) !!}
        {!! SemanticForm::close() !!}
    </div>

@stop
