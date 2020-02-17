<div class="ui secondary pointing menu">
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
          <div class="item">Visi Misi</div>
          <div class="item">Struktur Perangkat Desa</div>
          <a class="item" href="{{ url('/profil/bank-sampah') }}">Bank Sampah</a>
        </div>
      </div>
      <div class="item">
        <a href="{{ url('/auth/login') }}" class="ui primary button" style="border-color: #E7EEF4; border-width: 0.15rem; border-style: solid; border-radius: 50px; background-color: #7FB323; box-shadow: 0 1px 5px 0 rgba(87, 98, 113, 0.5);">LOGIN</a>
    </div>
    </div>
  </div>