@extends('web.layouts.main')
@section('title', 'V de Verde | Portfolio')

@section('content')
    <div class="blog-header">
        <div class="inner">
            <h1>PORTFOLIO</h1>
        </div>
    </div>
    <div class="row centered-logo">
        <img src="{{ asset('webimages/logos/logo.png') }}" alt="">
    </div>
    {{-- Content and Sidebar --}}
    <div class="container portfolio-container">
        @include('web.portfolio.partials.filter') 
        <div class="row">
            <div class="col-md-9 col-sm-12">
                @include('web.portfolio.content')
            </div>
            <div class="col-md-3 col-sm-3">
                @include('web.portfolio.sidebar')
            </div>
        </div>
    </div>
    
    {{-- / Content and Sidebar --}}
    @if($articles === null)
    <br><br><br><br><br>
    @else
        <div class="container">
            <div class="row">
                {!! $articles->render(); !!}
            </div>
        </div>
    @endif
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

        $('.ViewImage').click(function(){
            var filename = $(this).data('filename');
            console.log(filename);
            $('#ShowSelectedImage').attr('src',filename);
        });

        
    </script>
@endsection



   
