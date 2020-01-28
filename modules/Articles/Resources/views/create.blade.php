@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Add </h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('article.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    {!! form()->post(route('article.store'))->multipart() !!}
	{!! form()->text('title')->label('Title') !!}
	{!! form()->textarea('content')->label('Content') !!}
	{!! form()->text('status')->label('Status') !!}
    {!! form()->action([
        form()->submit('Save'),
        form()->link('Cancel', route('article.index'))
    ]) !!}
    {!! form()->close() !!}

@stop
