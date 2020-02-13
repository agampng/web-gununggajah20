@extends('ui::layouts.base')
@section('site.title', 'Artikel'.' ')

@section('body')
  {{-- background: #FFCB00; --}}
<div class="row row-header masthead" style="padding: 1rem 9%">
    {{-- navbar --}}
    <div class="ui secondary pointing menu">
        <a class="logo item" href="{{ url('/') }}">
            <img src="{{ asset('img/logo-web.png') }}" class="ui image centered" alt="" style="height: 70px; margin-bottom: 10px">
        </a>
        <div class="right menu">    
            <a href="{{ url('/') }}" class="item">
                <i class="flaticon-home"></i> Beranda
              </a>
              <a href="{{ url('/artikel') }}" class="active item">
                <i class="flaticon-mail"></i> Artikel
              </a>
              <a href="{{ url('/paket-wisata') }}" class="item">
                <i class="flaticon-mail"></i> Paket Wisata
              </a>
              <div class="ui pointing dropdown link item">
                <span class="text">Profil Desa</span>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">Profil Desa</div>
                  <a class="item" href="{{ url('/profil/informasi-geografis') }}">Informasi Geografis</a>
                  <div class="item">Visi Misi</div>
                  <div class="item">Struktur Perangkat Desa</div>
                  <div class="item">Bank Sampah</div>
                </div>
              </div>
          <a class="ui item" href="{{ url('/auth/login') }}">
            Login
          </a>
        </div>
      </div>
      {{-- end navbar --}}
      <div class="ui divider hidden"></div>
    <h1 class="ui header center aligned" style="color: white;">Berita & Artikel</h1>
    <div style="height: 5vh"></div>
</div>

{{-- <div class=""> --}}
<div class="ui segment attached row" style="padding: 1rem;">
    <div class="ui grid container stackable" style="padding: 1rem;">
        <div class="sixteen wide column">
            <div class="ui breadcrumb">
                <a href="{{ route('home.index') }}" class="section">Beranda</a>
                <div class="divider"> / </div>
                <div class="active section">Artikel</div>
            </div>
        </div>
        <div class="sixteen wide column">
            @if ($top !== null)
            <a href="{{ route('artikel.home.show', ['slug' => $top->slug]) }}">
                <div class="sixteen wide bottom aligned column" style="padding: 2rem; background-color: white; box-shadow: 0 1px 5px 0 rgba(87, 98, 113, 0.5);
            background-image: url({{ url('uploadedImage/'.$top->gambar) }}); background-size: cover; background-position: center">
                    <div class="sixteen wide column" style="height: 50vh"></div>
                    <div class="sixteen wide column image-title">
                        <h1 class="ui header" style="color: #fff">{{ $top->title }}</h1>
                        <h2 class="ui sub header" style="color: #fff">
                            {{ $top->createdBy->name }} | {{ $top->created_at_present }}
                        </h2>
                    </div>
                </div>
            </a>
            @endif
        </div>
        <div class="ten wide column">
            @foreach ($left as $item)
            <a href="{{ route('artikel.home.show', ['slug' => $item->slug]) }}">
                <div class="sixteen wide column">
                    <div class="sixteen wide column image-left" style="background-image: url({{ url('uploadedImage/'.$item->gambar) }});
                    background-size: cover; height: 40vh; background-position: center; background-color: white; box-shadow: 0 1px 5px 0 rgba(87, 98, 113, 0.5);">
                    </div>
                    <div class="sixteen wide column" style="padding: 1rem;">
                        <h1 class="ui center aligned header">{{ $item->title }}</h1>
                        <h2 class="ui center aligned sub header">
                            {{ $top->createdBy->name }} | {{ $item->created_at_present }}
                        </h2>
                        <div style="padding: 1rem 0;">
                            {!! mb_substr($item->content, 0, 400).'..' !!}
                        </div>
                    </div>
                </div>
            </a>
            <div class="ui divider"></div>
            <div class="ui divider hidden"></div>
            @endforeach

        </div>
        <div class="six wide column">
            <h3>Artikel Lainnya</h3>
            @foreach ($right as $item)
            <a href="{{ route('artikel.home.show', ['slug' => $item->slug]) }}">
                <div class="six wide column">
                    <img class="ui small left floated image" style="object-fit: cover; height: 5rem; background-color: white; box-shadow: 0 1px 5px 0 rgba(87, 98, 113, 0.5);" src="{{ url('uploadedImage/'.$item->gambar) }}">
                    <h5>{{ $item->title}}</h5>
                    <small>{{ $item->created_at_present }}</small>
                </div>
                <div class="ui divider hidden"></div>
                <div class="ui divider"></div>
            </a>
            @endforeach
        </div>
    </div>
</div>

<div class="ui inverted footer vertical segment center">
    <div class="ui stackable center aligned page grid">
        <div class="four column row">

        <div class="column" style="text-align: left;">
            <h5 class="ui inverted header">KONTAK KAMI</h5>
            <div class="ui inverted link list">
            <a class="item">Anang Wibowo</a>
            <a class="item">Padasan RT. 01, RW. 04, Gununggajah, Bayat, Klaten</a>
            <a class="item">Telepon / Whatsapp: 0858-7873-3140</a>
            <a class="item">Email: anangwibowo918@gmail.com</a>
            </div>
        </div>
        <div class="column" style="text-align: left;">
            <h5 class="ui inverted header">Community</h5>
            <div class="ui inverted link list">
            <a class="item">BBS</a>
            <a class="item">Careers</a>
            <a class="item">Privacy Policy</a>
            </div>
        </div>
        <div class="column" style="text-align: left;">
            <h5 class="ui inverted header">Community</h5>
            <div class="ui inverted link list">
            <a class="item">BBS</a>
            <a class="item">Careers</a>
            <a class="item">Privacy Policy</a>
            </div>
        </div>
        <div class="column" style="text-align: left;">
            <h5 class="ui inverted header">Community</h5>
            <div class="ui inverted link list">
            <a class="item">BBS</a>
            <a class="item">Careers</a>
            <a class="item">Privacy Policy</a>
            </div>
        </div>
        </div>
        <small>&copy; 2020 <a href="{{ url('/') }}">BUKIT CINTA WATU PRAHU</a> ALL RIGHTS RESERVED.</small>
    </div>
    </div>


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
