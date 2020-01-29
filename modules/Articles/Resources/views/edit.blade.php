@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Edit </h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('article.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    <div class="ui segment attached">
    {!! form()->bind($article)->put(route('article.update', $article->getKey()))->multipart() !!}
	{!! form()->textarea('title')->label('Title') !!}
	{!! form()->textarea('content')->label('Content') !!}
	{!! form()->text('status')->label('Status') !!}
    <div class="ui divider hidden"></div>
    {!! form()->action([
        form()->submit('Save'),
        form()->link('Cancel', route('article.index'))
    ]) !!}

    {!! form()->close() !!}
    </div>

@stop
