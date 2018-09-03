@extends('errors.main')

@section('title')
  V de Verde
@endsection

@section('content')
    <div class="container-fluid error-page">
        <div class="row inner">
            <img src="{{ asset('webimages/logos/logo.png') }}" alt="Logo V de Verde">
            <h1>UPS !</h1>
            <p>La página que está buscando no existe</p>
            <hr class="softhr">
            <a style="color: #000" href="{{ url('/') }}" class="btnHollow">Volver al inicio</a>
        </div>
    </div>
@endsection
