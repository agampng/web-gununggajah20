@extends('ui::layouts.base')
@section('site.title', 'Artikel'.' ')

@section('body')

<div class="row row-header" style="background: #eff2f5; padding: 3rem 0;">
    <h1 class="ui header center aligned">Artikel</h1>
</div>

<div class="row" style="padding: 1rem;">
    <div class="ui grid container stackable" style="padding: 1rem;">
        <div class="sixteen wide column">
            <div class="ui breadcrumb">
                <a href="{{ route('home.index') }}" class="section">Home</a>
                <div class="divider"> / </div>
                <div class="active section">Artikel</div>
            </div>
        </div>
        <div class="sixteen wide column">
            @if ($top !== null)
            <a href="{{ route('artikel.home.show', ['slug' => $top->slug]) }}">
                <div class="sixteen wide bottom aligned column" style="padding: 2rem;
            background-image: url({{ url('uploadedImage/'.$top->gambar) }}); background-size: cover; background-position: center">
                    <div class="sixteen wide column" style="height: 50vh"></div>
                    <div class="sixteen wide column image-title">
                        <h1 class="ui header" style="color: #fff">{{ $top->title }}</h1>
                        <h2 class="ui sub header" style="color: #fff">
                            {{ $top->created_at->toFormattedDateString() }}
                        </h2>
                    </div>
                </div>
            </a>
            @endif
        </div>
        <div class="ten wide column">
            @foreach ($left as $item)
            <a href="#">
                <div class="sixteen wide column">
                    <div class="sixteen wide column image-left" style="background-image: url({{ url('uploadedImage/'.$item->gambar) }});
                    background-size: cover; height: 40vh; background-position: center">
                    </div>
                    <div class="sixteen wide column" style="padding: 1rem;">
                        <h1 class="ui center aligned header">{{ $item->title }}</h1>
                        <h2 class="ui center aligned sub header">
                            {{ $item->created_at->toFormattedDateString() }}
                        </h2>
                        <div style="padding: 1rem 0;">
                            {!! mb_substr($item->content, 0, 400) !!}
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
        <div class="six wide column">
            @foreach ($right as $item)
            <a href="#}">
                <div class="sixteen wide column image-right" style="background-image: url({{ url('uploadedImage/'.$item->gambar) }});
            background-size: cover; padding: 1rem; margin-bottom: 1rem; background-position: center">
                    <div class="sixteen wide column" style="height: 15vh">

                    </div>
                    <div class="sixteen wide column bottom aligned image-title">
                        <h2 class="ui header" style="color: #fff;">{{ $item->title }}</h2>
                        <h3 class="ui aligned sub header" style="color: #fff">
                            {{ $item->created_at->toFormattedDateString() }}
                        </h3>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>


@endsection

@push('style')
<style>
    a {
        color: inherit;
        text-decoration: none;
    }

    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
    }
    
    .mobile-only{
        display: none !important;
    }
    .image-title {
        padding: 0.5rem;
        background-color: rgba(0, 0, 0, 0.33);
    }
    @media only screen and (max-width:620px){
        .computer-only {
            display: none !important;
        }
        .mobile-only {
            display: inline !important;
        }
        .row-header {
            margin-top: 3em;
        }
        .sixteen.wide.column.image-left {
            height: 10em !important;
            background-position: center !important;
        }
        .sixteen.wide.column.image-right {
            background-position: center !important;
        }
    }
</style>
@endpush

@push('script')
<script>
    $(document).ready(function () {
        $('.ui.sidebar').sidebar({
            transition: 'overlay',
            verbose: 'false',
            closable: 'false',
            silent: 'true',
        }).sidebar('attach events', '.mobile_item');
    });
</script>
    
@endpush
