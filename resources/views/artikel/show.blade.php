@extends('ui::layouts.base')
@section('site.title', $post->title.' -')

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
                <a href="{{ route('artikel.home.index') }}" class="section">Artikel</a>
                <div class="divider"> / </div>
                <div class="active section">{{ $post->title }}</div>
            </div>
        </div>
        <div class="sixteen wide column">
            <div class="sixteen wide bottom aligned column image-header" style="padding: 2rem;
            background-image: url({{ url('uploadedImage/'.$post->gambar) }}); background-size: cover;">
                <div class="sixteen wide column computer-only" style="height: 50vh"></div>
                <div class="sixteen wide column computer-only image-title">
                    <h1 class="ui header" style="color: #fff">{{ $post->title }}</h1>
                    <h2 class="ui sub header" style="color: #fff">
                        {{ $post->created_at->toFormattedDateString() }}
                    </h2>
                </div>

            </div>

            <div class="sixteen wide column mobile-only" style="padding: 1rem">
                <h2 class="ui header" style="color: black">{{ $post->title }}</h1>
                <h3 class="ui sub header" style="color: black">
                    {{ $post->created_at->toFormattedDateString() }}
                </h2>
            </div>
            <div class="sixteen wide column article-content" style="padding: 1rem;">
                {!! $post->content !!}
            </div>

            <div class="sixteen wide column">
                <div class="sharethis-inline-share-buttons"></div>
            </div>
        </div>


    </div>
</div>

@endsection

@push('style')
<style>
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
        .sixteen.wide.bottom.aligned.column.image-header {
            height: 25vh !important;
            background-position: center !important;
        }
        .sixteen.wide.column.article-content {
            padding: 0 !important;
            padding-bottom: 1rem !important;
        }
    }
</style>
@endpush

@push('script')
<script type='text/javascript'
src='//platform-api.sharethis.com/js/sharethis.js#property=5ce3b318dc07bd00120823cd&product=inline-share-buttons'
async='async'>
</script>
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
