@extends('web.layouts.main')

@section('title', 'Studio Vimana | Portfolio')

@section('styles')
@endsection

@section('content')
    <div class="blog-header">
        <div class="inner">
            <h1>BLOG</h1>
        </div>
    </div>
    @include('web.blog.partials.filter') 
    {{-- Content and Sidebar --}}
    <div class="container-fluid blog-container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                @include('web.blog.content')
            <div class="clearfix"></div>
            </div>
            <div class="col-md-3 col-sm-3">
                @include('web.blog.sidebar')
            </div>
            {!! $articles->render(); !!}
        </div>
    </div>
    {{-- / Content and Sidebar --}}
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

    </script>
@endsection



   
