@extends('web.layouts.main')
@section('title', 'V de Verde | Inicio')

@section('styles')
    {{-- {!! Html::style('plugins/swiper-slider/swiper.min.css') !!} --}}
@endsection

@section('content')

    <div class="container-fluid">
        <div class="home-banner-container">
            <div class="row">
                <div class="home-banner">
                    <div class="row inner">
                        <span class="title">
                            Macetas de Diseño
                        </span>
                        <hr>
                        <p>
                            Ideal para huertas orgánicas y decoración
                        </p>
                    </div>
                </div>
                <div class="row centered-logo" style="margin-top: -80px">
                    <img src="{{ asset('webimages/logos/logo.png') }}" alt="">
                </div>   
            </div>
        </div>
    </div>

    {{-- --}}
    <div class="mosaic-block">
        <div class="container centered-info">
            <div class="row wow animated fadeIn" data-wow-delay="300ms">
                <h1><i>Generá un espacio chic y natural en tu casa</i></h1>
                <p>
                    Contamos con diferentes modelos de macetas en madera, <br> además te ayudamos a armar tu diseño a medida.
                </p>
            </div>
        </div>
        <div class="container bgimg-container">
            <div class="row mobile-flex-column">
                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="200ms">
                    <a href="{{ url('https://vdeverde.mercadoshops.com.ar/kit-para-regalos_qO27058343XtOcxSM') }}">
                        <div class="inner maderas-img-link bg-zoom-home border">
                            <h1 class="white-txt bt-shadow-w">KITS PARA <br>REGALOS</h1>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="300ms" >
                    <a href="{{ url('maderas') }}">
                    <div class="inner blue-back-link bg-zoom-home">
                        <h1 class="white-txt bt-shadow3">NUESTRAS <br> MADERAS</h1>
                    </div>
                    </a>    
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="400ms">
                    <a href="{{ url('https://vdeverde.mercadoshops.com.ar/accesorios-jardin_qO27284169XtOcxSM') }}">
                        <div class="inner accesorios-img-link bg-zoom-home">
                            <h1 class="white-txt bt-shadow">ACCESORIOS</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mobile-flex-column">
                <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="500ms">
                    <a href="{{ url('https://vdeverde.mercadoshops.com.ar/huerta-en-jardin_qO27061125XtOcxSM') }}">
                        <div class="inner huerta-img-link bg-zoom-home txC">
                            <h1 class="white-txt bt-shadow">DISEÑOS PARA <br> JARDINES</h1>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="600ms">
                    <a href="{{ url('https://vdeverde.mercadoshops.com.ar/huerta-urbana_qO27061017XtOcxSM') }}">
                        <div class="inner urbana-img-link bg-zoom-home txC">
                            <h1 class="white-txt bt-shadow">DISEÑOS PARA <br>ESPACIOS PEQUEÑOS</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row  mobile-flex-column">
                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="700ms">
                    <a href="{{ url('portfolio') }}">
                        <div class="inner blue-back-link bg-zoom-home txC">
                            <h1 class="white-txt bt-shadow3">PORTFOLIO</h1>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="800ms">
                    <a style="color: #fff" href="{{ url('blog') }}">
                        <div class="inner blog-img-link bg-zoom-home">
                            <h1 class="white-tx bt-shadow">BLOG</h1>
                            <p class="white-tx bt-shadow">NOVEDADES / CONSEJOS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="900ms">
                    <a href="{{ url('https://play.google.com/store/apps/details?id=ar.teovogel.vdeverde') }}">
                        <div class="inner blue-back-link bg-zoom-home">
                            <h1 class="white-txt bt-shadow3">APP</h1>
                            <p class="white-txt txC bt-shadow3">  
                                Consejos para armar y mantener tu huerta (Descargala gratis acá)
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> {{-- Mosaic Block --}}
    
    {{-- --}}
    <div class="container-fluid centered-info lblue-back margTop50 wow animated fadeIn" data-wow-delay="300ms">
        <div class="row">
            <h1><i>Empezá hoy a conectar</i></h1>
            <p>
                Meté mano en la tierra y disfrutá tu cosecha. <br>
                Generá aromas y sabores en tus comidas, conservando un espacio armonioso y natural dentro de tu casa.
            </p>
        </div>
    </div>
    <div class="container-fluid lblue-back wow animated fadeIn shop-preview-block" data-wow-delay="300ms">
        <div class="container">
            <div class="row shop-preview">
                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview">
                    <div class="inner">
                        <a href="{{ url('https://vdeverde.mercadoshops.com.ar/huerta-organica-individual-ideal-aromaticas-en-distintas-variedad-de-maderas-551260335xJM') }}">
                            <div class="image">
                                <img src="{{ asset('webimages/home/shop-pre-1.jpg') }}"  class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="description">
                            <div class="title"> Maceta Individual </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Ideal aromáticas. <br> Quebracho, <br>  Guayubira. </div>
                            <div class="price"> $290 </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview">
                    <div class="inner">
                        <a href="{{ url('https://vdeverde.mercadoshops.com.ar/huerta-organica-maceta-de-diseno-decoracion-ideal-esquinero-apto-aromaticas-opcion-en-diferente-variedad-de-maderas-551260347xJM') }}">
                            <div class="image">
                                <img src="{{ asset('webimages/home/shop-pre-2.jpg') }}"  class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="description">
                            <div class="title"> Maceta Cubo </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Maceta de diseño y decoración.<br> Ideal 4 Aromáticas.  <br> Esquinero.</div>
                            <div class="price"> $1.199 </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview wow animated fadeIn" data-wow-delay="300ms">
                    <div class="inner">
                        <a href="{{ url('https://vdeverde.mercadoshops.com.ar/huerta-organica-ideal-34-plantines-de-aromaticas-macetas-disponibles-en-diferentes-opciones-de-maderas-551260282xJM') }}">
                            <div class="image">
                                <img src="{{ asset('webimages/home/shop-pre-3.jpg') }}"  class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="description">
                            <div class="title"> Maceta Rectangular </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Maceta Escalera huerta orgánica vertical (varios en tamaños) Quebracho, Gayubira  </div>
                            <div class="price"> $599 </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="action txC">
                    <a style="color: #000" href="{{ url('https://vdeverde.mercadoshops.com.ar') }}"><button class="btnHollow"> Ver Colección Completa</button></a>
                </div>
            </div>
        </div>        
    </div>
    {{-- <div id="Error"></div> --}}
    @include('web.layouts.partials.seguinosnews')
    <br>
    @include('web.layouts.partials.contact')
@endsection

@section('scripts')
    {{-- {!! HTML::script('plugins/swiper-slider/swiper.jquery.min.js') !!} --}}
    @include('web.layouts.partials.common')
@endsection

@section('custom_js')
    <script>    
        // var swiper = new Swiper('.swiper-container', {
        //     pagination: '.swiper-pagination',
        //     paginationClickable: true,
        //     direction: 'horizontal'
        // });
    </script>
@endsection

