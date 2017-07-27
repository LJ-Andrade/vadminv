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
                            Reconectate <br>
                            con lo Natural
                        </span>
                        <hr>
                        <p>
                            Es volver a incorporar a tu vida elementos esenciales. <br>
                            Todo lo que necesitamos está en la naturaleza, sólo hay <br>
                            que saber conectarse con ella.
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
                <h1><i>Rico. Simple. Nutritivo</i></h1>
                <p>
                    Meté mano en la tierra y disfrutá tu cosecha. <br> Generá aromas y sabores en tus
                    comidas, conservando un espacio armonioso y natural dentro de tu casa.
                </p>
            </div>
        </div>
        <div class="container bgimg-container">
            <div class="row mobile-flex-column">
                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="200ms">
                    <a href="{{ url('http://www.tienda.vdeverde.com.ar/kit-para-regalos_qO27058343XtOcxSM') }}">
                        <div class="inner maderas-img-link bg-zoom-home border">
                            <h1 class="white-txt bt-shadow-w">KITS PARA <br>REGALOS</h1>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="300ms" >
                    <a href="{{ url('maderas') }}">
                    <div class="inner blue-back-link bg-zoom-home">
                        <h1 class="white-txt bt-shadow3">MADERAS</h1>
                    </div>
                    </a>    
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="400ms">
                    <a href="{{ url('accesorios') }}">
                        <div class="inner accesorios-img-link bg-zoom-home">
                            <h1 class="white-txt bt-shadow">ACCESORIOS</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mobile-flex-column">
                <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="500ms">
                    <a href="{{ url('http://www.tienda.vdeverde.com.ar/huerta-en-jardin_qO27061125XtOcxSM') }}">
                        <div class="inner huerta-img-link bg-zoom-home txC">
                            <h1 class="white-txt bt-shadow">HUERTA DE JARDÍN</h1>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="600ms">
                    <a href="{{ url('http://www.tienda.vdeverde.com.ar/huerta-urbana_qO27061017XtOcxSM') }}">
                        <div class="inner urbana-img-link bg-zoom-home txC">
                            <h1 class="white-txt bt-shadow">HUERTA URBANA</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row  mobile-flex-column">
                <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="700ms">
                    <a href="{{ url('desayunos') }}">
                        <div class="inner blue-back-link bg-zoom-home txC">
                            <h1 class="white-txt bt-shadow3">DESAYUNOS <br>NATURALES</h1>
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
                    <div class="inner blue-back-link bg-zoom-home">
                        <h1 class="white-txt bt-shadow3">APP</h1>
                        <p class="white-txt txC bt-shadow3">  
                            Descargá Gratis la APP <br>
                            Para bajarla poné me gusta en FB<br>   
                            o ingresá tus datos: <br>
                            Nombre y Mail
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> {{-- Mosaic Block --}}
    
    {{-- --}}
    <div class="container-fluid centered-info lblue-back margTop50 wow animated fadeIn" data-wow-delay="300ms">
        <div class="row">
            <h1><i>Empezá hoy a conectar</i></h1>
            <p>
                Contamos con diferentes modelos para que puedas armar tu huerta orgánica <br> en tu jardín,
                patio o balcon, incorporando productos frescos sin aditivos ni pesticidas.
            </p>
        </div>
    </div>
    <div class="container-fluid lblue-back wow animated fadeIn shop-preview-block" data-wow-delay="300ms">
        <div class="container">
            <div class="row shop-preview">
                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview">
                    <div class="inner">
                        <a href="{{ url('http://www.tienda.vdeverde.com.ar/huerta-organica-individual-ideal-aromaticas-en-distintas-variedad-de-maderas-551260335xJM') }}" target="_blank">
                            <div class="image">
                                <img src="{{ asset('webimages/home/shop-pre-1.jpg') }}"  class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="description">
                            <div class="title"> Maceta Individual </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Ideal aromáticas. <br> Rabo, Quebracho, Guayubira. </div>
                            <div class="price"> $290 </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview">
                    <div class="inner">
                        <a href="{{ url('http://www.tienda.vdeverde.com.ar/huerta-organica-maceta-de-diseno-decoracion-ideal-esquinero-apto-aromaticas-opcion-en-diferente-variedad-de-maderas-551260347xJM') }}" target="_blank">
                            <div class="image">
                                <img src="{{ asset('webimages/home/shop-pre-2.jpg') }}"  class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="description">
                            <div class="title"> Maceta Cubo  </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Maceta de diseño y decoración. <br> Esquinero. Ideal 4 Aromáticas. </div>
                            <div class="price"> $1.199 </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview wow animated fadeIn" data-wow-delay="300ms">
                    <div class="inner">
                        <a href="{{ url('http://www.tienda.vdeverde.com.ar/huerta-organica-ideal-34-plantines-de-aromaticas-macetas-disponibles-en-diferentes-opciones-de-maderas-551260282xJM') }}" target="_blank">
                            <div class="image">
                                <img src="{{ asset('webimages/home/shop-pre-3.jpg') }}"  class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="description">
                            <div class="title"> Maceta Rectangular  </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Ideal 3/4 plantines de aromáticas. Rabo, Quebracho, Guayubira   </div>
                            <div class="price"> $599 </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="action txC">
                    <a style="color: #000" href="{{ url('http://www.tienda.vdeverde.com.ar/') }}"><button class="btnHollow"> VER COLECCIÓN COMPLETA</button></a>
                </div>
            </div>
        </div>
    </div>

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

