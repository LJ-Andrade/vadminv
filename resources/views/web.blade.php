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
                    <img src="{{ asset('webimages/logos/logo.png') }}" alt="V de Verde Logo">
                </div>   
            </div>
        </div>
    </div>

    {{-- --}}
    <div class="container mosaic-section">
        
        <div class="row centered-info wow animated fadeIn" data-wow-delay="300ms">
            <h1>Generá un espacio chic y natural en tu casa</h1>
            <p>
                Contamos con diferentes modelos de macetas en madera, <br> además te ayudamos a armar tu diseño a medida.
            </p>
        </div>
    
        <div class="row mosaic-block">
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="200ms">
                <a href="{{ url('https://vdeverde.mercadoshops.com.ar/kit-para-regalos_qO27058343XtOcxSM') }}">
                    <div class="inner maderas-img-link border">
                        <h1 class="white-txt wt-shadow">KITS PARA <br>REGALOS</h1>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="300ms" >
                <a href="{{ url('maderas') }}">
                <div class="inner blue-back-link">
                    <h1 class="white-txt bt-shadow3">NUESTRAS <br> MADERAS</h1>
                </div>
                </a>    
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="400ms">
                <a href="{{ url('https://vdeverde.mercadoshops.com.ar/accesorios-jardin_qO27284169XtOcxSM') }}">
                    <div class="inner accesorios-img-link">
                        <h1 class="white-txt bt-shadow">ACCESORIOS</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mosaic-block">
            <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="500ms">
                <a href="{{ url('https://vdeverde.mercadoshops.com.ar/huerta-en-jardin_qO27061125XtOcxSM') }}">
                    <div class="inner huerta-img-link">
                        <h1 class="white-txt bt-shadow">DISEÑOS PARA <br> JARDINES</h1>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="600ms">
                <a href="{{ url('https://vdeverde.mercadoshops.com.ar/huerta-urbana_qO27061017XtOcxSM') }}">
                    <div class="inner urbana-img-link">
                        <h1 class="white-txt bt-shadow">DISEÑOS PARA <br>ESPACIOS PEQUEÑOS</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mosaic-block">
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="700ms">
                <a href="{{ url('portfolio') }}">
                    <div class="inner blue-back-link txC">
                        <h1 class="white-txt bt-shadow3">PORTFOLIO</h1>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="800ms">
                <a style="color: #fff" href="{{ url('blog') }}">
                    <div class="inner blog-img-link">
                        <h1 class="white-tx wt-shadow">BLOG</h1>
                        <p class="white-tx wt-shadow">NOVEDADES / CONSEJOS</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="900ms">
                <a href="{{ url('https://play.google.com/store/apps/details?id=ar.teovogel.vdeverde') }}">
                    <div class="inner blue-back-link">
                        <h1 class="white-txt bt-shadow3">APP</h1>
                        <p class="white-txt txC bt-shadow3">  
                            Consejos para armar y mantener tu huerta (Descargala gratis acá)
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div> {{-- Mosaic Section --}}
    
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
                                <img src="{{ asset('webimages/home/shop-pre-1.jpg') }}"  class="img-responsive" alt="Maceta de madera">
                            </div>
                        </a>
                        <div class="description">
                            <div class="title"> Maceta Individual </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Ideal aromáticas.  <br>   Quebracho,Guayubira. </div>
                            <div class="price">  </div>
                            {{-- $290 --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview">
                    <div class="inner">
                        <a href="{{ url('https://vdeverde.mercadoshops.com.ar/huerta-organica-maceta-de-diseno-decoracion-ideal-esquinero-apto-aromaticas-opcion-en-diferente-variedad-de-maderas-551260347xJM') }}">
                            <div class="image">
                                <img src="{{ asset('webimages/home/shop-pre-2.jpg') }}"  class="img-responsive" alt="Macetas de madera">
                            </div>
                        </a>
                        <div class="description">
                            <div class="title"> Maceta Cubo </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Maceta de diseño y decoración.<br> Ideal 4 Aromáticas. Esquinero.</div>
                            <div class="price">  </div>
                            {{-- $1.199 --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 shop-item-preview wow animated fadeIn" data-wow-delay="300ms">
                    <div class="inner">
                        <a href="{{ url('https://vdeverde.mercadoshops.com.ar/huerta-organica-verticalescalera-grande-ideal-balcon-terraza-apto-12-plantines-madera-quebracho-guayubira-780555788xJM') }}">
                            <div class="image">
                                <img src="{{ asset('webimages/home/shop-pre-3.jpg') }}"  class="img-responsive" alt="Huerta vertical">
                            </div>
                        </a>
                        <div class="description">
                            <div class="title"> Maceta Escalera </div>
                            <div class="left-divider-sm"></div>
                            <div class="text"> Huerta orgánica vertical (varios tamaños) Quebracho, Gayubira  </div>
                            <div class="price"> </div>
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

