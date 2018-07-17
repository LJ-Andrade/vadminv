@extends('web.layouts.main')
@section('title', 'V de Verde | Inicio')

@section('styles')
    {!! Html::style('plugins/swiper-slider/swiper.min.css') !!}
@endsection

@section('content')


    <div class="container-fluid esencia-banner">
        <div class="text">
            <div class="container">
                {{-- <h1 class="title">Nuestra Esencia</h1> <br> --}}
                <p>
                    Cuantas veces sentimos que estamos cansados, atareados por la vorágine del día a día, <br>desconectados en este
                    mundo hiperconectado. Hay una sensación latente en nuestro interior que con tanto ruido desoímos, tapamos,
                    hacemos a un lado. Esa sensación es la que nos unió, la que nos hizo comenzar a transitar este camino, el de
                    recuperar nuestra esencia, conectar con algo natural. <br>
                    Así nació <b>VdeVerde</b>, de la idea y las ganas de reconectarnos con la naturaleza, de entender la infinidad de cosas
                    que podemos obtener de ella., cada uno a su modo, a sus tiempos.
                </p>
            </div>
            <div class="quote">"Todo lo que necesitamos esta en la naturaleza, solo hay que saber conectarse con ella."</div>
        </div>
        <img class="img-desktop" src="{{ asset('webimages/esencia/banner.jpg') }}" alt="">
    </div>

    {{-- <br>
    <br>
    <br> --}}
    <br>
    <br>
@endsection

@section('scripts')
    @include('web.layouts.partials.common')
@endsection


