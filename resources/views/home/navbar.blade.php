<div class="ui secondary pointing menu computer-only">
  <a class="logo item" href="{{ url('/') }}">
    <img src="{{ asset('img/logo-web.png') }}" class="ui image centered" alt="" style="height: 4rem; margin-bottom: 10px">
  </a>
  <div class="right menu">
    <a href="{{ url('/') }}" class="item" style="color: #ffffff;">
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
        <div class="item">Profil Desa</div>
        <a class="item" href="{{ url('/profil/informasi-geografis') }}">Informasi Geografis</a>
        <a class="item" href="{{ url('/profil/visi-misi') }}">Visi & Misi</a>
        <a class="item" href="{{ url('/profil/bank-sampah') }}">Bank Sampah</a>
      </div>
    </div>
    <div class="item">
      <a href="{{ url('/auth/login') }}" class="ui primary button" style="border-color: #E7EEF4; border-radius: 50px; background-color: #7FB323; box-shadow: 0 1px 5px 0 rgba(87, 98, 113, 0.5);">LOGIN</a>
  </div>
  </div>
</div>

  {{-- mobile --}}

<div class="ui secondary top fixed menu mobile-only" style="background-color: white; padding-top: 2%; padding-bottom: 2%;">
  <div class="ui grid middle aligned mobile only">
      <div class="two wide column">
          <a id="mobile_item" class="mobile_item item" style="background-color: transparent;">
            <i class="fa fa-bars" style="color: black"></i>
          </a>
      </div>
      <div class="seven wide column">
          <div class="ui tiny image left aligned">
              <a href="/">
                  <img src="{{ asset(config('laravolt.ui.brand_image')) }}" alt="" style="height: 4rem">
              </a>
          </div>
      </div>
      <div class="seven wide column" style="text-align: right;padding-right: 20px;">
          <a class="ui primary button" style="background: #7FB323; box-shadow: 0 1px 5px 0 rgba(87, 98, 113, 0.5)" href="{{ url('/auth/login') }}">LOGIN</a>
      </div>
  </div>
</div>

<div class="ui sidebar vertical menu wide left" style="height: 10%;">
    <div class="ui grid one column">
        <div class="ui divider hidden"></div>
        <div class="column">
            <div class="ui secondary top menu" style="margin-top: 2%;">
                <div class="item" style="margin-top: -10%;">
                    <img src="{{ asset(config('laravolt.ui.brand_image')) }}" alt="" class="ui image tiny" style="height: 4rem; width: 4rem">
                </div>
                <div class="right menu">
                    <div class="ui item" style="margin-top: -60%;margin-left: 20%;">
                        <a id="mobile_item" class="mobile_item item" style="background-color: transparent;">
                            <i class="close icon big black"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="ui grid middle aligned">
            <div class="row">
                    <div class="sixteen wide column" style="font-size: 18px">
                <a href="{{ url('/') }}" class="text navbar" style="color: black; margin-left: 0.5em;">Beranda</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="item">
      <div class="ui grid middle aligned">
          <div class="row">
                  <div class="sixteen wide column" style="font-size: 18px">
              <a href="{{ url('/artikel') }}" class="text navbar" style="color: black; margin-left: 0.5em;">Artikel</a>
                  </div>
            </div>
        </div>
    </div>
    <div class="item">
      <div class="ui grid middle aligned">
          <div class="row">
                  <div class="sixteen wide column" style="font-size: 18px">
              <a href="{{ url('/paket-wisata') }}" class="text navbar" style="color: black; margin-left: 0.5em;">Paket Wisata</a>
                  </div>
          </div>
      </div>
  </div>
  <div class="item">
    <div class="ui grid middle aligned">
        <div class="row">
                <div class="sixteen wide column" style="font-size: 18px">
            <a href="{{ url('/profil/informasi-geografis') }}" class="text navbar" style="color: black; margin-left: 0.5em;">Informasi Geografis</a>
                </div>
        </div>
    </div>
</div>
<div class="item">
  <div class="ui grid middle aligned">
      <div class="row">
              <div class="sixteen wide column" style="font-size: 18px">
          <a href="{{ url('/profil/visi-misi') }}" class="text navbar" style="color: black; margin-left: 0.5em;">Visi Misi</a>
              </div>
      </div>
  </div>
</div>
<div class="item">
  <div class="ui grid middle aligned">
      <div class="row">
              <div class="sixteen wide column" style="font-size: 18px">
          <a href="{{ url('/profil/bank-sampah') }}" class="text navbar" style="color: black; margin-left: 0.5em;">Bank Sampah</a>
              </div>
      </div>
  </div>
</div>
  <div class="item">
    <div class="ui grid middle aligned">
        <div class="row">
                <div class="sixteen wide column" style="font-size: 18px">
            <a href="{{ url('/auth/login') }}" class="text navbar" style="color: black; margin-left: 0.5em;">Login</a>
                </div>
        </div>
    </div>
  </div>
</div>