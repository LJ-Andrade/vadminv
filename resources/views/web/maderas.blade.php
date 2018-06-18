@extends('web.layouts.main')
@section('title', 'V de Verde | Inicio')

@section('styles')
    {!! Html::style('plugins/swiper-slider/swiper.min.css') !!}
@endsection

@section('content')

    {{-- SLIDER --}}
    <div class="container-fluid pad0">
        <div class="blog-header">
            
        </div>
        {{-- /SLIDER --}}
        <div class="row centered-logo">
            <img src="{{ asset('webimages/logos/logo.png') }}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row centered-text-container">
            <h1><i>Maderas</i></h1>
            <p>Elegimos maderas que representan nuestra esencia, que permanecen invariables, intactas, a pesar de
                las inclemencias del tiempo. Precisamente eso es lo que hace a nuestros productos únicos.
            </p>
        </div>
        <div class="row">
            <div class="col-md-12 img-and-text">
                <div class="col-md-6 image"><img src="{{ asset('webimages/maderas/img1.png') }}" alt=""></div>
                <div class="col-md-6 text">
                    <h1>Quebracho Colorado</h1>
                    <hr>
                    <p>
                        <b>Características generales:</b>  <br>
                        Madera nacional, de Formosa y Chaco. <br>
                        Muy dura, muy pesada e impenetrable.
                    </p>
                    <span>&#149; <b>Color:</b> castaño, rojizo.</span> <br>
                    <span>&#149; <b>Durabilidad al exterior:</b> + de 30 años</span> <br>
                    <span>&#149; <b>Hongos: muy durable. Insectos:</b> Resistente.</span> <br>
                    <span>&#149; <b>Comportamiento:</b> Toma bien los lustres, pero
                    no las pinturas.</span>
                </div>
            </div>

            <div class="col-md-12  img-and-text">
                <div class="col-md-6 image"><img src="{{ asset('webimages/maderas/img2.png') }}" alt=""></div>
                <div class="col-md-6 text">
                    <h1>Guayubira</h1>
                    <hr>
                    <p>
                        Características generales: Madera nacional, misionera,
                        dura, sin nudos, alta resistencia y poco penetrable.
                    </p>
                    <span>&#149; <b>Color:</b> Amarillento a ocre.</span> <br>
                    <span>&#149; <b>Durabilidad al exterior:</b> 15 a 20 años.</span> <br>
                    <span>&#149; <b>Hongos: muy durable. Insectos:</b> Resistente.</span> <br>
                    <span>&#149; <b>Comportamiento:</b> Toma bien los lustres y barnices,
                    pero no las pinturas.</span>
                </div>
            </div>

            {{--  <div class="col-md-12  img-and-text">
                <div class="col-md-6 image"><img src="{{ asset('webimages/maderas/img3.png') }}" alt=""></div>
                <div class="col-md-6 text">
                    <h1>Rabo molle</h1>
                    <hr>
                    <p>
                        Características generales: Madera nacional,
                        misionera, blanda a semi dura, penetrable.
                    </p>
                    <span>&#149; <b>Color:</b> Amarillo..</span> <br>
                    <span>&#149; <b>Durabilidad al exterior:</b> 5 a 10 años.</span> <br>
                    <span>&#149; <b>Hongos: </b> poco resistente. Insectos: Susceptible.</span> <br>
                    <span>&#149; <b>Comportamiento:</b> Toma muy bien ceras y lustres.</span>
                </div>
            </div>  --}}


        </div>
    </div>
    <br>
    @include('web.layouts.partials.seguinosnews')
    

    @include('web.layouts.partials.contact')
@endsection

@section('scripts')
    @include('web.layouts.partials.common')
@endsection


