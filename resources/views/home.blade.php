<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Desa Wisata Gununggajah</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage/semantic.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage/iconfonts/flaticon.css') }}">
  <link href="{{ asset('plugin/slick/slick.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('plugin/slick/slick-theme.css') }}" rel="stylesheet" type="text/css">
  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/iconfonts/flaticon.css') }}"> --}}

  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script type="text/javascript" src="{{ asset('css/homepage/semantic.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/homepage.js') }}"></script>
  <script src="{{ asset('plugin/slick/slick.min.js')  }}"></script>
  <script>
    $(function(){
      $('.ui.card').popup();
    });
    $(document).ready(function () {
      $('.one-time').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          adaptiveHeight: true,
          arrows: true,
          autoplay: true,
          autoplaySpeed: 2000,
      });
    });
  </script>
   {!! NoCaptcha::renderJs() !!}
  <style>
        .slick-prev:before, .slick-next:before {
          color:#B2B5BB !important;
        }
        .slick-prev {
          z-index: 1
        }
        .one-time {
          padding-top: 2em;
          padding-bottom: 2em;
        }
    html {
      scroll-behavior: smooth;
    }
    #desc-wisata > p{
      color:#8F8F8F
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
</head>
<body id="home">
<div class="ui inverted masthead centered segment">
  <div class="ui page grid">
    <div class="column">
      <div class="ui secondary pointing menu">
        <a class="logo item" href="{{ url('/') }}">
          <img src="{{ asset('img/logo-web.png') }}" class="ui image centered" alt="" style="height: 70px; margin-bottom: 10px">
        </a>
        <div class="right menu">
          <a href="{{ url('/') }}" class="active item" style="color: #ffffff;">
            Beranda
          </a>
          <a href="{{ url('/artikel') }}" class="item" style="color: #ffffff;">
            Artikel
          </a>
          <a href="{{ url('/paket-wisata') }}" class="item" style="color: #ffffff;">
            Paket Wisata
          </a>
          <div class="ui pointing dropdown link item">
            <span class="text" style="color: #ffffff;">Profil Desa</span>
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item" href="{{ url('/profil/informasi-geografis') }}">Informasi Geografis</a>
              <div class="item">Visi Misi</div>
              <div class="item">Struktur Perangkat Desa</div>
              <div class="item">Bank Sampah</div>
            </div>
          </div>
          <div class="item">
            <a href="{{ url('/auth/login') }}" class="ui primary button" style="border-color: #E7EEF4; border-width: 0.15rem; border-style: solid; border-radius: 50px; background-color: #7FB323; box-shadow: 0 1px 5px 0 rgba(87, 98, 113, 0.5);">LOGIN</a>
        </div>
        </div>
      </div>

      <div class="ui hidden transition information">
        <h1 class="ui inverted centered header">
          Desa Wisata Gununggajah 
        </h1>
        <p class="ui centered lead">"GUMBREGAH"</p>
        <a href="#section1" class="large basic inverted animated fade ui button">
          <div class="visible content">Paket Wisata</div>
          <div class="hidden content">Info Lebih Lanjut</div>
        </a>
        <div class="ui centerted image">
          <div class="one-time" style="height: 40rem">
              <img style="object-fit: cover" src="{{asset('img/banner.png')}}" />
              <img src="{{asset('img/totoro-horizontal.jpg')}}" />
              <img src="{{asset('img/liveforms.png')}}" />
              <img src="{{asset('img/klaten-logo.png')}}" />
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="ui vertical feature segment">
  <div class="ui centered page grid">
    <div class="row">
      <div class="eight wide centered column">
        <div class="ui divider hidden"></div>
        <h1 class="center aligned ui header">
          Berita & Artikel
        </h1>
        <div class="ui horizontal divider"><i class="balck flaticon-camera icon"></i></div>
        <p class="ui centered lead">Informasi di Desa Gununggajah</p>
      </div>
    </div>
    <div class="fourteen wide column">
      <div class="ui three column center aligned stackable divided grid">
        @foreach($artikel as $a)
          <div class="column column-feature">
            <div class="gambar">
              <label class="ui label yellow" style="position:absolute;"><small>{{$a->created_at_present}}</small></label>
              <img style="width: 15rem; height: 15rem; object-fit: cover" src="{{ asset('uploadedImage/'.$a->gambar) }}" alt="">
            </div>
            <div class="ui icon header">
              {{$a->title}}
            </div>
            <div style="text-align: left">{!! substr($a->content,0,80) !!}..</div>
            <a class="ui button green" href="{{ route('artikel.home.show', ['slug' => $a->slug]) }}">
                Baca
              </a>
          </div>
        @endforeach
      </div>
      <div class="ui divider hidden"></div>
      <a href="{{ url('/artikel') }}" style="float: right">Lihat selengkapnya</a>
    </div>
  </div>
</div>



<div class="ui recent-works vertical segment">
  <div class="ui very relaxed stackable centered page grid">
    <div class="row">
      <div class="eight wide centered column" id="section1">
        <h1 class="center aligned ui inverted header">
          Paket Wisata
        </h1>
        <div class="ui horizontal divider"><i class="white flaticon-camera icon"></i></div>
        <p class="ui centered lead">Informasi Paket Wisata di Desa Gununggajah</p>
      </div>
    </div>
    <div class="fourteen wide column">
      <div class="ui three column aligned stackable divided grid">
        @foreach ($wisata as $w)
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
              <div class="ui green bottom attached button" onclick="window.location.href='/paket-wisata/'">
                <i class="flaticon-play icon"></i>
                Info  
              </div>
            </div>

          </div>
        @endforeach

      </div>
      <button class="ui secondary button" style="margin-top: 2rem;" onclick="window.location.href='/paket-wisata/'">
        Selengkapnya
      </button>
    </div>
  </div>
</div>


<div class="ui vertical segment">
  <div class="ui stackable center aligned page grid">
    <div class="row">
      <div class="eight wide column">
        <h1 class="ui header">
          Media Sosial
        </h1><div class="ui horizontal divider"><i class="flaticon-settings icon"></i></div>
        <p class="ui centered lead">
        </p>
        <br/>
      </div>
    </div>
    <div class="four column logo row">
      <div class="column">
        <div class="ui shape">
          <div class="sides">
            <div class="active side">
              <i class="huge flaticon-facebook icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-google icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-twitter icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-pinterest icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-google icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-more icon"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui shape">
          <div class="sides">
            <div class="side">
              <i class="huge flaticon-google icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-more icon"></i>
            </div>
            <div class="active side">
              <i class="huge flaticon-twitter icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-facebook icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-google icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-twitter icon"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="ui shape">
          <div class="sides">
            <div class="active side">
              <i class="huge flaticon-facebook icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-google icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-twitter icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-pinterest icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-google icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-more icon"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui shape">
          <div class="sides">
            <div class="side">
              <i class="huge flaticon-google icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-more icon"></i>
            </div>
            <div class="active side">
              <i class="huge flaticon-twitter icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-facebook icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-google icon"></i>
            </div>
            <div class="side">
              <i class="huge flaticon-twitter icon"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="ui recent-works vertical segment">
  <div class="ui very relaxed stackable centered page grid">
    <div class="row">
      <div class="eight wide centered column">
        <h1 class="center aligned ui inverted header" id="sectionContact">
          Kritik / Saran
        </h1>
        <div class="ui horizontal divider"><i class="white flaticon-camera icon"></i></div>
        <p class="ui centered lead">Sampaikan kritik / saran anda</p>
        @if ($message = Session::get('success'))
        <div class="ui info message">
          <ul class="list">
            <li>{{ $message }}</li>
          </ul>
        </div>
      @endif

      @if ($message = Session::get('error'))
        <div class="ui error message">
          <ul>
              <li>{{ $message }}</li>
          </ul>
        </div>
      @endif
        <form id="form-pesan" class="ui form" method="POST" action="{{ url('contact-form') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="field">
              <label style="color: white">Nama</label>
              <div class="ui transparent input">
                  <input type="text" name="name" placeholder="Nama">
              </div>
          </div>
          <div class="field">
              <label style="color: white">Alamat Email</label>
              <div class="ui transparent input">
                  <input type="email" name="email" placeholder="email@mail.com">
              </div>
          </div>
          <div class="field">
              <label style="color: white">Pesan</label>
              <div class="ui transparent input">
                  <textarea name="pesan" autocomplete="off" placeholder="Tulis pesan..."></textarea>
              </div>
            </div>
            {!! NoCaptcha::display() !!}
          <div class="ui divider hidden"></div>
          <div class="field">
        </div>
          <div>
              <div class="center aligned ui inverted header">
                  <button type="submit" class="ui button primary">
                      Kirim
                  </button>
              </div>
          </div>

          
      </form>
      </div>
    </div>
    <div class="fourteen wide column">
      <div class="ui three column aligned stackable divided grid">

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
    <h5 class="ui inverted header">&copy; 2020 <a href="{{ url('/') }}">BUKIT CINTA WATU PRAHU</a> ALL RIGHTS RESERVED.</h5>
  </div>
</div>
</body>

</html>

@push('script')
  {!! app('captcha')->renderJs() !!}
@endpush

