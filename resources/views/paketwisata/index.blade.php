@extends('ui::layouts.base')
@section('site.title', 'Paket Wisata')

@section('body')
  {{-- background: #FFCB00; --}}
<div class="row row-header masthead" style="padding: 1rem 9%">
    <div class="ui secondary pointing menu">
        <a class="logo item" href="{{ url('/') }}">
            <img src="{{ asset('img/logo-web.png') }}" class="ui image centered" alt="" style="height: 70px; margin-bottom: 10px">
        </a>
        <div class="right menu">    
            <a href="{{ url('/') }}" class="item">
                <i class="flaticon-home"></i> Beranda
              </a>
              <a href="{{ url('/artikel') }}" class="item">
                <i class="flaticon-mail"></i> Artikel
              </a>
              <a href="{{ url('/paket-wisata') }}" class="active item">
                <i class="flaticon-mail"></i> Paket Wisata
              </a>
              <div class="ui pointing dropdown link item">
                <span class="text">Profil Desa</span>
                <i class="dropdown icon"></i>
                <div class="menu">
                      <div class="item">Informasi Geografis</div>
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
      <div class="ui divider hidden"></div>
    <h1 class="ui header center aligned" style="color: white;">Paket Wisata</h1>
    <div style="height: 5vh"></div>
</div>

{{-- <div class=""> --}}
<div class="ui segment attached row" style="padding: 1rem;">
    <div class="ui grid container stackable" style="padding: 1rem;">
        <div class="sixteen wide column">
            <div class="ui breadcrumb">
                <a href="{{ route('home.index') }}" class="section">Beranda</a>
                <div class="divider"> / </div>
                <div class="active section">Paket Wisata</div>
            </div>
        </div>
        <div class="fourteen wide column">
            <div class="ui three column aligned stackable grid">
              @foreach ($paketWisata as $w)
                <div class="column">
                  <div class="ui card">
                    <div class="image">
                      <img style="object-fit: cover" src="{{ asset('uploadedImage/'.$w->file) }}">
                    </div>
                    <div class="content" style="height: 10rem">
                      <div class="header">{{ $w->title }}</div>
                      <div class="description">
                        Paket Wisata: {{ $w->kategori_wisata }}
                      </div>
                      <div class="description" id="desc-wisata">
                        Deskripsi: <br>{!! substr($w->content,0,80) !!}..
                      </div>
                    </div>
                    <a class="ui green bottom attached button" href="{{ route('paket-wisata.home.show', ['slug' => $w->slug]) }}">
                        Info
                    </a>
                  </div>
      
                </div>
              @endforeach
      
            </div>
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
