@extends('web.layouts.main')
@section('title', 'V de Verde | Inicio')

@section('styles')
    {!! Html::style('plugins/swiper-slider/swiper.min.css') !!}
@endsection

@section('content')

    {{-- SLIDER --}}
    <div class="container-fluid">
        <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="banner-img-desktop" src="{{ asset('webimages/home/slider1.jpg') }}" alt="">
                        <img class="banner-img-mobile" src="{{ asset('webimages/home/slider1mobile.jpg') }}" alt="">
                        <div class="inner">
                            <span class="title">
                                Reconectate <br>
                                con lo Natural
                            </span>
                            <hr class="blue-hr">
                            <p>
                                Es volver a incorporar a tu vida elementos esenciales. <br>
                                Todo lo que necesitamos está en la naturaleza, sólo hay <br>
                                que saber conectarse con ella
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        {{-- /SLIDER --}}
        <div class="row centered-logo">
            <img src="{{ asset('webimages/logos/logo.png') }}" alt="">
        </div>
    </div>

    {{-- --}}
    <div class="container centered-info">
        <div class="row wow animated fadeIn" data-wow-delay="300ms">
            <h1>Rico. Simple. Nutritivo</h1>
            <p>
                Meté mano en la tierra y disfruta tu cosecha. <br> Generá aromas y sabores en tus
                comidas, conservando un espacio armonioso y natural dentro de tu casa.
            </p>
        </div>
    </div>
    {{-- --}}
    <div class="container">
        <div class="row mobile-flex-column">
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="300ms">
                <div class="inner accesorios-img-link bg-zoom-home">
                    <h1 class="blue-txt">ACCESORIOS</h1>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="600ms" >
                <div class="inner blue-back-link bg-zoom-home">
                    <h1 class="white-txt">MADERAS</h1>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="800ms">
                <div class="inner maderas-img-link bg-zoom-home">
                    <h1 class="blue-txt">KITS DE <br>REGALOS</h1>
                </div>
            </div>
        </div>
        <div class="row  mobile-flex-column">
            <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="1000ms">
                <div class="inner huerta-img-link bg-zoom-home txC">
                    <h1 class="white-txt">HUERTA DE JARDÍN</h1>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="1200ms">
                <div class="inner urbana-img-link bg-zoom-home txC">
                    <h1 class="white-txt">HUERTA URBANA</h1>
                </div>
            </div>
        </div>
        <div class="row  mobile-flex-column">
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="1400ms">
                <div class="inner blue-back-link bg-zoom-home txC">
                    <h1 class="white-txt">NUESTRA <br>ESCENCIA</h1>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="1600ms">
                <div class="inner blog-img-link bg-zoom-home">
                    <h1 class="blue-txt">BLOG</h1>
                    <p>NOVEDADES / CONSEJOS</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="1800ms">
                <div class="inner blue-back-link bg-zoom-home">
                    <h1 class="white-txt">APP</h1>
                    <p class="white-txt txC">  
                        Descargá Gratis la APP <br>
                        Para bajar la APP tenes que
                        poner me gusta en FB,
                        o ingresar tus Datos: <br>
                        Nombre y Mail
                    </p>
                </div>
            </div>
        </div>
    </div>
        {{-- --}}
    <div class="container-fluid centered-info grey-back margTop50 wow animated fadeIn" data-wow-delay="300ms">
        <div class="row">
            <h1>Empezá hoy a conectar</h1>
            <p>
                Contamos con diferentes modelos para que puedas armar tu huerta orgánica <br> en tu jardin,
                patio o balcon, incorporando productos frescos sin aditivos ni pesticidas.
            </p>
        </div>
    </div>
    <div class="container-fluid grey-back wow animated fadeIn" data-wow-delay="300ms">
        <div class="container">
            <div class="row shop-preview">
                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview">
                    <div class="inner">
                        <div class="image">
                            <img src="{{ asset('webimages/home/shop-pre-1.jpg') }}"  class="img-responsive" alt="">
                        </div>
                        <div class="description">
                            <div class="title"> Macetas altas para piso </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Fabricadas en madera y cemento </div>
                            <div class="price"> $560 </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview">
                    <div class="inner">
                        <div class="image">
                            <img src="{{ asset('webimages/home/shop-pre-2.jpg') }}"  class="img-responsive" alt="">
                        </div>
                        <div class="description">
                            <div class="title"> Macetas altas para piso </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Fabricadas en madera y cemento </div>
                            <div class="price"> $560 </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview wow animated fadeIn" data-wow-delay="300ms">
                    <div class="inner">
                        <div class="image">
                            <img src="{{ asset('webimages/home/shop-pre-3.jpg') }}"  class="img-responsive" alt="">
                        </div>
                        <div class="description">
                            <div class="title"> Macetas altas para piso </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Fabricadas en madera y cemento </div>
                            <div class="price"> $560 </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="action txC">
                    <button class="btnHollow"> VER COLECCIÓN COMPLETA</button>
                </div>
              
            </div>

        </div>
    </div>

    <div class="container-fluid social-banner wow animated fadeIn" data-wow-delay="300ms">
        <div class="container">
            <div class="row inner">
                <h1>Seguinos en:</h1>
                <div class="horizontal-list">
                    <ul class="">
                        <li><img src="{{ asset('webimages/icons/red1.png') }}" class="img-responsive" alt=""></li>
                        <li><img src="{{ asset('webimages/icons/red2.png') }}" class="img-responsive" alt=""></li>
                        <li><img src="{{ asset('webimages/icons/red3.png') }}" class="img-responsive" alt=""></li>
                        <li><img src="{{ asset('webimages/icons/red4.png') }}" class="img-responsive" alt=""></li>
                        <li><img src="{{ asset('webimages/icons/red5.png') }}" class="img-responsive" alt=""></li>
                        <li><img src="{{ asset('webimages/icons/red6.png') }}" class="img-responsive" alt=""></li>
                        <li><img src="{{ asset('webimages/icons/red7.png') }}" class="img-responsive" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid newsletter-banner wow animated fadeIn" data-wow-delay="300ms">
        <div class="container">
            <div class="col-md-6 inner1">
                <div class="image">
                    <img src="{{ asset('webimages/logos/logonews.png') }}" class="img-responsive" alt="">
                </div>
                <div class="text">
                    <span class="title">Suscribite a nuestro Newsletter!</span>
                    <p>
                        Recibí todas las novedades suscribiendote a
                        nuestro newsletter.
                    </p>
                </div>
            </div>
            <div class="col-md-6 inner2">
                <div class="form-inline">
                    <input type="text" name="newsletter">
                    <button class="newsbutton">Suscribirse</button>
                </div>
            </div>
        </div>    
    </div>
    <br>

    @include('web.layouts.partials.contact')

    @include('web.layouts.partials.foot')


@endsection

@section('scripts')
    {!! HTML::script('plugins/swiper-slider/swiper.jquery.min.js') !!}
    @include('web.layouts.partials.common')
@endsection

@section('custom_js')
    <script>    
        var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                direction: 'horizontal'
            });
    </script>
@endsection

