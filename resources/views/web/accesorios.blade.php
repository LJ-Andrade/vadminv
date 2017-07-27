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
            
            <h1><i>Accesorios</i></h1>
            <p>
                Proximamente...
            </p>
        </div>

    </div>
    @include('web.layouts.partials.seguinosnews')
    

    @include('web.layouts.partials.contact')
@endsection

@section('scripts')
    @include('web.layouts.partials.common')
@endsection


