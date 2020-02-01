<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Start UP - Creative Landing Page Template</title>

  <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage/semantic.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage/iconfonts/flaticon.css') }}">
  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/iconfonts/flaticon.css') }}"> --}}

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script type="text/javascript" src="{{ asset('css/homepage/semantic.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/homepage.js') }}"></script>
  <script>
    $(function(){
      $('.ui.card').popup();
    });
  </script>
  <style>
  html {
    scroll-behavior: smooth;
  }
  </style>
</head>
<body id="home">
<div class="ui inverted masthead centered segment">
  <div class="ui page grid">
    <div class="column">



      <div class="ui secondary pointing menu">
        <a class="logo item">
          Desa Gununggajah
        </a>
      <a href="{{ url('/') }}" class="active item">
          <i class="flaticon-home"></i> Beranda
        </a>
        <a href="{{ url('/') }}" class="item">
          <i class="flaticon-mail"></i> Artikel
        </a>
        <a href="{{ url('/') }}" class="item">
          <i class="flaticon-mail"></i> Paket Wisata
        </a>
        <a href="{{ url('/') }}" class="item">
          <i class="flaticon-heart"></i> Bank Sampah
        </a>
        <div class="right menu">
          <div class="item">
            <div class="ui icon input">
              <input placeholder="Search..." type="text">
              <i class="flaticon-position link icon"></i>
            </div>
          </div>
          <a class="ui item" href="{{ url('/auth/login') }}">
            Login
          </a>
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
        <img src="{{asset('img/banner.png')}}" />
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ui vertical feature segment">
  <div class="ui centered page grid">
    <div class="row">
      <div class="eight wide centered column">
        <h1 class="center aligned ui header">
          Artikel
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
              <img style="width: 15rem; height: 15rem; object-fit: cover" src="{{ asset('uploadedImage/'.$a->gambar) }}" alt="">
            </div>
            <div class="ui icon header">
              {{$a->title}}
            </div>
            {!! substr($a->content,0,100) !!}
            <a class="ui button green" href="#">
                Baca
              </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>



<div class="ui recent-works vertical segment" id="section1">
  <div class="ui very relaxed stackable centered page grid">
    <div class="row">
      <div class="eight wide centered column">
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

            <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
              <div class="image">
                <img style="width: 20rem; height: 20rem; object-fit: cover" src="{{ asset('uploadedImage/'.$w->file) }}">
              </div>
              <div class="content">
              <div class="header">{!! $w->title !!}</div>
                <div class="description">
                  {!! $w->content !!}
                </div>
              </div>
              <div class="ui two bottom attached buttons">
                <div class="ui button">
                  <i class="flaticon-plus icon"></i>
                  Queue
                </div>
                <div class="ui pink button">
                  <i class="flaticon-play icon"></i>
                  Info
                </div>
              </div>
            </div>

          </div>
        @endforeach

      </div>
    </div>
  </div>
</div>


<div class="ui vertical segment">
  <div class="ui stackable center aligned page grid">
    <div class="row">
      <div class="eight wide column">
        <h1 class="ui header">
          Our Clients
        </h1><div class="ui horizontal divider"><i class="flaticon-settings icon"></i></div>
        <p class="ui centered lead">
          Many Companies Rely on Our Cat Knowledge
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

<div class="ui recent-works vertical segment" id="section1">
  <div class="ui very relaxed stackable centered page grid">
    <div class="row">
      <div class="eight wide centered column">
        <h1 class="center aligned ui inverted header">
          Kritik / Saran
        </h1>
        <div class="ui horizontal divider"><i class="white flaticon-camera icon"></i></div>
        <p class="ui centered lead">Sampaikan kritik / saran anda</p>
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

      <div class="column">
        <h5 class="ui inverted header">Courses</h5>
        <div class="ui inverted link list">
          <a class="item">Registration</a>
          <a class="item">Course Calendar</a>
          <a class="item">Professors</a>
        </div>
      </div>
      <div class="column">
        <h5 class="ui inverted header">Library</h5>
        <div class="ui inverted link list">
          <a class="item">A-Z</a>
          <a class="item">Most Popular</a>
          <a class="item">Recently Changed</a>
        </div>
      </div>
      <div class="column">
        <h5 class="ui inverted header">Community</h5>
        <div class="ui inverted link list">
          <a class="item">BBS</a>
          <a class="item">Careers</a>
          <a class="item">Privacy Policy</a>
        </div>
      </div>

      <div class="column">
        <h5 class="ui inverted header">Designed By</h5>
        <addr>
          <a class="item" href="http://scripteden.com"><img src="{{asset('img/scripteden-logo-g.png')" alt="Logo" style="height:20px" /></a>  <br/>
          <a href="http://scripteden.com/downloads/bootstrap/">Bootstrap Templates</a>           <br/>
          <a href="http://scripteden.com/downloads/semantic-ui/">Semantic UI Templates</a>
        </addr>


      </div>
    </div>



  </div>
</div>
</body>

</html>
