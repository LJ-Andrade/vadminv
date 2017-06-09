@extends('web.layouts.main')

@section('title', 'Studio Vimana | Portfolio')


@section('styles')
@endsection


@section('content')
    <div id="actual_section" data-section"blog"></div>
    

        @include('web.blog.partials.filter') 

    
    <div class="container blog-container">
        <div class="col-md-9">
            @include('web.blog.content')
        </div>
        <div class="col-md-3">
            @include('web.blog.sidebar')
        </div>
        {!! $articles->render(); !!}
    </div>

@endsection


@section('scripts')
@endsection

@section('custom_js')
    <script type="text/javascript">

        $('.Show-Mobile-Filter').click(function(){
            
            var filter = $('.Fiter-Inner');

            if(filter.hasClass('Hidden')){
                filter.removeClass('Hidden');
            } else {
                filter.addClass('Hidden');
            }
        });

    </script>
@endsection




   
