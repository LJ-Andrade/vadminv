@extends('web.layouts.main')

@section('title', 'V de Verde | Blog')

@section('styles')
@endsection

@section('content')
    <div class="blog-header">
        <div class="inner">
            <h1>BLOG</h1>
        </div>
    </div>
    <div class="row centered-logo">
        <img src="{{ asset('webimages/logos/logo.png') }}" alt="">
    </div>
    {{-- Content and Sidebar --}}
    <div class="container blog-container">
        @include('web.blog.partials.filter') 
        <div class="row">
            <div class="col-md-9 col-sm-12">
                @include('web.blog.content')
            </div>
            <div class="col-md-3 col-sm-3">
                @include('web.blog.sidebar')
            </div>
        </div>
    </div>
    {{-- / Content and Sidebar --}}
    <div class="container">
        <div class="row">
            {!! $articles->render(); !!}
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection


@section('custom_js')
    <script type="text/javascript">

        $('.Show-Mobile-Filter').click(function(e){
            e.preventDefault();
            
            var filter = $('.Fiter-Inner');

            if(filter.hasClass('Hidden')){
                filter.removeClass('Hidden');
            } else {
                filter.addClass('Hidden');
            }
        });

        $('.CloseFilters').click(function(){

            $(this).parent().addClass('Hidden');

        });

    </script>
@endsection



   
