@extends('ui::layouts.base')
@section('site.title', 'asd -')

@section('body')

<div class="row row-header masthead" style="padding: 1rem 9%">
    @include('home.navbar')
</div>
<div class="sixteen wide column" style="margin-top: -1rem; background-image: url({{ url('img/green-1.jpg') }});background-size: cover; background-position: center;">
    <div class="ui divider hidden"></div>
    <h1 class="ui header inverted centered" style="font-size: 4rem">Informasi Geografis</h1>
    <div style="height: 6vh"></div>
</div>


<div class="row" style="padding: 1rem;">
    <div class="ui grid container stackable" style="padding: 1rem;">
        <div class="sixteen wide column">
            <div class="ui breadcrumb">
                <a href="{{ route('home.index') }}" class="section">Beranda</a>
                <div class="divider"> / </div>
                <a href="#" class="section">Profil</a>
                <div class="divider"> / </div>
                <div class="active section">{{ $content->title }}</div>
            </div>
        </div>
        <div class="sixteen wide column">
            <div class="sixteen wide bottom aligned column image-header" style="padding: 2rem; border-bottom-style: solid; border-bottom-color: #7BAE23; border-width: 5px; box-shadow: 2px 0 10px 0 grey, -2px 1px 8px -4px grey;">            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2422806340765!2d110.66739011419854!3d-7.764111194404302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a47cbc3734b9d%3A0x45f15bded4095f4d!2sBukit%20Cinta%20Watu%20Prahu!5e0!3m2!1sid!2sid!4v1581514996454!5m2!1sid!2sid" width="100%" height="450" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>

            <div class="sixteen wide column" style="box-shadow: 2px 0 10px 0 grey, -2px 1px 8px -4px grey; padding: 10px; border-left-style: solid; border-left-color: #7BAE23; border-left-width: 5px; padding: 1rem">
                <h2 class="ui header" style="color: black">{{ $content->title }}</h2>
            </div>
            <div class="ui divider hidden"></div>
            <div class="sixteen wide column article-content" style="padding: 2rem; border-bottom-style: solid; border-bottom-color: #7BAE23; border-width: 5px; box-shadow: 2px 0 10px 0 grey, -2px 1px 8px -4px grey;">
                {{-- {!! $post->content !!} --}}
                {!! $content->content !!}
            </div>
            <div class="ui divider hidden"></div>

            <div class="sixteen wide column">
                <div class="sharethis-inline-share-buttons"></div>
            </div>
        </div>


    </div>
</div>
@include('home.footer')
@endsection

@push('style')
<style>
    .masthead {
        background: #5e851b;
        background: -moz-linear-gradient(-45deg,  #5e851b 0%, #8ec926 69%, #9bd13b 89%);
        background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#5e851b), color-stop(69%,#8ec926), color-stop(89%,#9bd13b));
        background: -webkit-linear-gradient(-45deg,  #5e851b 0%,#8ec926 69%,#9bd13b 89%);
        background: -o-linear-gradient(-45deg,  #5e851b 0%,#8ec926 69%,#9bd13b 89%);
        background: -ms-linear-gradient(-45deg,  #5e851b 0%,#8ec926 69%,#9bd13b 89%);
        background: linear-gradient(135deg,  #5e851b 0%,#8ec926 69%,#9bd13b 89%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#182a73', endColorstr='#20a7ac',GradientType=1 );
        border-radius: 0;
        margin: 0em;
        padding: 1rem 0rem 0;
    }
    .masthead .column {
        position: relative;
    }
    .menu .right.menu > .mobile.item {
        display: none;
    }
    .ui.secondary.pointing.menu {
        border-bottom: 1px solid rgba(255,255,255, 0.1);
    }
    .ui.menu .logo.item{
        font-weight: 800;color: #ffffff;font-size: 16pt;padding: 0 10px !important;
    }
    .ui.menu .item{
        color: rgba(255,255,255,0.4);

    }
    .ui.secondary.pointing.menu > .menu > .item, .ui.secondary.pointing.menu > .item{
        border-bottom-width: 1px;
        margin: 0 0 -1px;
    }

    .ui.secondary.pointing.menu .item .ui.input input{
        color: rgba(255,255,255,0.6);
    }
    .ui.secondary.pointing.menu .item i{
        margin-right: 3px;
        color: rgba(255,255,255,0.6);
    }

    .ui.secondary.pointing.menu > .menu > .item:not(.logo), .ui.secondary.pointing.menu > .item:not(.logo){
        padding: 1em 0;
        margin-left: 1em;
        margin-right: 1em;
    }

    .ui.secondary.pointing.menu > .menu > .link.item:hover, .ui.secondary.pointing.menu > .link.item:hover, .ui.secondary.pointing.menu > .menu > a.item:hover, .ui.secondary.pointing.menu > a.item:hover{
        color: rgba(255,255,255,0.6);
    }
    .ui.secondary.pointing.menu > .menu > .item.active, .ui.secondary.pointing.menu > .item.active{
        color: rgba(255,255,255,0.6);
    }

    .ui.secondary.pointing.menu > .menu > .item.active, .ui.secondary.pointing.menu > .item.active{
        border-color: rgba(255,255,255,0.2);
    }
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
        .sixteen.wide.bottom.aligned.column.image-header {
            position: relative;
            padding-bottom: 75%; // This is the aspect ratio
            height: 0;
            overflow: hidden;
        }

        .sixteen.wide.bottom.aligned.column.image-header iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
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
