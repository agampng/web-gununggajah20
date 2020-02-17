@extends('ui::layouts.base')
@section('site.title', 'Bank Sampah')

@section('body')

<div class="row row-header masthead" style="padding: 1rem 9%">
    @include('home.navbar')
</div>
<div class="sixteen wide column"
    style="margin-top: -1rem; background-image: url({{ url('img/green-1.jpg') }});background-size: cover; background-position: center;">
    <div class="ui divider hidden"></div>
    <h1 class="ui header inverted centered" style="font-size: 4rem">Bank Sampah</h1>
    <div style="height: 5vh"></div>
</div>
<div class="row" style="padding: 1rem;">
    <div class="ui grid container stackable" style="padding: 1rem;">
        <div class="sixteen wide column">
            <div class="ui breadcrumb">
                <a href="{{ route('home.index') }}" class="section">Beranda</a>
                <div class="divider"> / </div>
                <a href="{{ route('artikel.home.index') }}" class="section">Profil</a>
                <div class="divider"> / </div>
                <div class="active section">Bank Sampah</div>
            </div>
        </div>
        <div class="sixteen wide column center aligned">
            <div class="sixteen wide column image-header center aligned"
                style="padding: 2rem; border-bottom-style: solid; border-bottom-color: #7BAE23; border-width: 5px; box-shadow: 2px 0 10px 0 grey, -2px 1px 8px -4px grey;">
                <img class="ui center aligned" src="{{asset('uploadedImage/'.$content->image)}}" alt=""
                    style="height: 20rem; width: 50%; object-fit: fill">
                <h1 class="ui header">{{ $content->title }}</h1>
                <h2 class="ui sub header">
                    15 Februari 2020 | KKN Universitas Islam Indonesia Unit 40
                </h2>
                <div class="ui container left aligned column article-content" style="padding: 1rem;">
                    {!! $content->content !!}
                </div>
            </div>
            <div class="ui divider hidden"></div>
            <div class="sixteen wide column article-content" style="padding: 1rem;">
                <div class="ui container left aligned"
                    style="box-shadow: 2px 0 10px 0 grey, -2px 1px 8px -4px grey; padding: 10px; border-left-style: solid; border-left-color: #7BAE23; border-left-width: 5px;">
                    <h3 class="ui header" style="padding-left: 10px;">Foto</h3>
                </div>
                <div class="ui clearing divider"></div>
                <div class="ui divider hidden"></div>
                <div class="ui stackable four column grid">
                    {{-- @foreach($photos as $ids => $photo) --}}
                    <div class="column">
                        <a style="cursor: pointer" onclick="openModal();currentSlide(1)">
                            <div class="ui segment">
                                <img src="{{ asset('img/bank-sampah-galleries.jpeg') }}"
                                    style="height: 200px;width: 100%" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a style="cursor: pointer" onclick="openModal();currentSlide(2)">
                            <div class="ui segment">
                                <img src="{{ asset('img/bank-sampah-galleries3.jpeg') }}"
                                    style="height: 200px;width: 100%" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a style="cursor: pointer" onclick="openModal();currentSlide(3)">
                            <div class="ui segment">
                                <img src="{{ asset('img/bank-sampah-galleries7.jpeg') }}"
                                    style="height: 200px;width: 100%" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a style="cursor: pointer" onclick="openModal();currentSlide(4)">
                            <div class="ui segment">
                                <img src="{{ asset('img/bank-sampah-galleries8.jpeg') }}"
                                    style="height: 200px;width: 100%" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a style="cursor: pointer" onclick="openModal();currentSlide(5)">
                            <div class="ui segment">
                                <img src="{{ asset('img/bank-sampah-galleries9.jpeg') }}"
                                    style="height: 200px;width: 100%" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a style="cursor: pointer" onclick="openModal();currentSlide(6)">
                            <div class="ui segment">
                                <img src="{{ asset('img/bank-sampah-galleries4.jpeg') }}"
                                    style="height: 200px;width: 100%" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a style="cursor: pointer" onclick="openModal();currentSlide(7)">
                            <div class="ui segment">
                                <img src="{{ asset('img/bank-sampah-galleries2.jpeg') }}"
                                    style="height: 200px;width: 100%" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a style="cursor: pointer" onclick="openModal();currentSlide(8)">
                            <div class="ui segment">
                                <img src="{{ asset('img/bank-sampah-galleries5.jpeg') }}"
                                    style="height: 200px;width: 100%" alt="">
                            </div>
                        </a>
                    </div>
                    {{-- @endforeach --}}

                    <div id="modal-view-photos" class="ui basic modal view-photos">
                        <div name="photo-Slides" class="ui image centered crop">
                            <img class="centered image" src="{{ asset('img/bank-sampah-galleries.jpeg') }}" alt="">
                        </div>
                        <div name="photo-Slides" class="ui image centered crop">
                            <img class="centered image" src="{{ asset('img/bank-sampah-galleries3.jpeg') }}" alt="">
                        </div>
                        <div name="photo-Slides" class="ui image centered crop">
                            <img class="centered image" src="{{ asset('img/bank-sampah-galleries7.jpeg') }}" alt="">
                        </div>
                        <div name="photo-Slides" class="ui image centered crop">
                            <img class="centered image" src="{{ asset('img/bank-sampah-galleries8.jpeg') }}" alt="">
                        </div>
                        <div name="photo-Slides" class="ui image centered crop">
                            <img class="centered image" src="{{ asset('img/bank-sampah-galleries9.jpeg') }}" alt="">
                        </div>
                        <div name="photo-Slides" class="ui image centered crop">
                            <img class="centered image" src="{{ asset('img/bank-sampah-galleries4.jpeg') }}" alt="">
                        </div>
                        <div name="photo-Slides" class="ui image centered crop">
                            <img class="centered image" src="{{ asset('img/bank-sampah-galleries2.jpeg') }}" alt="">
                        </div>
                        <div name="photo-Slides" class="ui image centered crop">
                            <img class="centered image" src="{{ asset('img/bank-sampah-galleries5.jpeg') }}" alt="">
                        </div>
                        <div id="image-index" class="ui header centered"
                            style="text-transform: lowercase; font-size: 16px;"></div>
                        <a class="prev" style="cursor: pointer;position: absolute; left: -80px; top: 45%; color: white"
                            onclick="nextSlides(-1)"><i class="huge angle left icon"></i></a>
                        <a class="next" style="cursor: pointer;position: absolute; right: -80px; top: 45%; color: white"
                            onclick="nextSlides(1)"><i class="huge angle right icon"></i></a>
                    </div>
                </div>
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
    .ui.image.centered.crop {
        width: 900px;
        height: 600px;
        overflow: hidden;
        align-self: center;
    }

    .ui.image.centered.crop img {
        width: 900px;
        height: 600px;
        align-self: center;
    }

    .masthead {
        background: #5e851b;
        background: -moz-linear-gradient(-45deg, #5e851b 0%, #8ec926 69%, #9bd13b 89%);
        background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, #5e851b), color-stop(69%, #8ec926), color-stop(89%, #9bd13b));
        background: -webkit-linear-gradient(-45deg, #5e851b 0%, #8ec926 69%, #9bd13b 89%);
        background: -o-linear-gradient(-45deg, #5e851b 0%, #8ec926 69%, #9bd13b 89%);
        background: -ms-linear-gradient(-45deg, #5e851b 0%, #8ec926 69%, #9bd13b 89%);
        background: linear-gradient(135deg, #5e851b 0%, #8ec926 69%, #9bd13b 89%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#182a73', endColorstr='#20a7ac', GradientType=1);
        border-radius: 0;
        margin: 0em;
        padding: 1rem 0rem 0;
    }

    .masthead .column {
        position: relative;
    }

    .menu .right.menu>.mobile.item {
        display: none;
    }

    .ui.secondary.pointing.menu {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .ui.menu .logo.item {
        font-weight: 800;
        color: #ffffff;
        font-size: 16pt;
        padding: 0 10px !important;
    }

    .ui.menu .item {
        color: rgba(255, 255, 255, 0.4);

    }

    .ui.secondary.pointing.menu>.menu>.item,
    .ui.secondary.pointing.menu>.item {
        border-bottom-width: 1px;
        margin: 0 0 -1px;
    }

    .ui.secondary.pointing.menu .item .ui.input input {
        color: rgba(255, 255, 255, 0.6);
    }

    .ui.secondary.pointing.menu .item i {
        margin-right: 3px;
        color: rgba(255, 255, 255, 0.6);
    }

    .ui.secondary.pointing.menu>.menu>.item:not(.logo),
    .ui.secondary.pointing.menu>.item:not(.logo) {
        padding: 1em 0;
        margin-left: 1em;
        margin-right: 1em;
    }

    .ui.secondary.pointing.menu>.menu>.link.item:hover,
    .ui.secondary.pointing.menu>.link.item:hover,
    .ui.secondary.pointing.menu>.menu>a.item:hover,
    .ui.secondary.pointing.menu>a.item:hover {
        color: rgba(255, 255, 255, 0.6);
    }

    .ui.secondary.pointing.menu>.menu>.item.active,
    .ui.secondary.pointing.menu>.item.active {
        color: rgba(255, 255, 255, 0.6);
    }

    .ui.secondary.pointing.menu>.menu>.item.active,
    .ui.secondary.pointing.menu>.item.active {
        border-color: rgba(255, 255, 255, 0.2);
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

    .mobile-only {
        display: none !important;
    }

    .image-title {
        padding: 0.5rem;
        background-color: rgba(0, 0, 0, 0.33);
    }

    @media only screen and (max-width:620px) {
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

    $('.popup')
        .popup();

    function openModal() {
        $('.ui.basic.modal.view-photos')
            .modal('show');
    }

    var slideIndex = 0;
    showSlides(slideIndex);

    function nextSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByName("photo-Slides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
        document.getElementById("image-index").innerHTML = slideIndex + " Of " + slides.length;
    }
    $(document).ready(function () {
        $('.save-modal').click(function () {
            $('.ui.modal.save.job').modal({
                    closable: false
                })
                .modal('show');
        });
        $('.unsave-modal').click(function () {
            $('.ui.modal.unsave.job').modal({
                    closable: false
                })
                .modal('show');
        });
        $("#save-confirmation").click(function () {
            location.reload();
        });
        $("#unsave-confirmation").click(function () {
            location.reload();
        });
    })
</script>
@endpush