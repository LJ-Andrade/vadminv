<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>V de Verde</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Conectate con lo natural" />
		<meta name="keywords" content="huerta, huerta urbana, natural, jardin" />
		<meta name="author" content="https://vimanastudio.com.ar" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('webimages/logos/favicon.png') }}">

		<meta property="og:url"         content="http://vdeverde.com.ar" />
		<meta property="og:type"        content="article" />
		<meta property="og:title"       content="V de Verde" />
		<meta property="og:description" content="Es volver a incorporar a tu vida elementos esenciales. 
		Todo lo que necesitamos está en la naturaleza, sólo hay 
		que saber conectarse con ella." />
		<meta property="og:image"       content="{{ asset('webimages/logos/main-logo.png') }}" />
		<meta name="twitter:title"      content="V de Verde" />
		<meta name="twitter:image"      content="{{ asset('webimages/logos/main-logo.png') }}" />
		{{-- <meta name="twitter:card"       content="" /> --}}
		{{-- <link rel="stylesheet" async  type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}"> --}}
		{{-- <link rel="stylesheet" async  type="text/css" href="{{ asset('plugins/animate/animate.css') }}"> --}}
		{{-- <link rel="stylesheet" async  type="text/css" href="{{ asset('plugins/ionicons/ionicons.min.css') }}">  --}}
		{{-- <link rel="stylesheet" type="text/css" href="{{ asset('plugins/sweetalert/sweetalert2.min.css') }}"> --}}
		
		@yield('styles')
		<link rel="stylesheet" type="text/css" href="{{ asset('css/web.css') }}">
		{{-- @include('web.layouts.partials.analyticstracking')		 --}}
        <style>
          /*! CSS Used from: http://localhost/vadminv/public/plugins/bootstrap/css/bootstrap.min.css */
            @font-face {
            font-family: 'myOwnFontSet';
            src: local('Verdana'), local('Arial'), local(sans-serif); }
            /*! CSS Used from: https://vdeverde.com.ar/plugins/bootstrap/css/bootstrap.min.css */
            body{margin:0;}
            footer,header,nav{display:block;}
            a{background-color:transparent;}
            a:active,a:hover{outline:0;}
            b{font-weight:700;}
            h1{margin:.67em 0;font-size:2em;}
            img{border:0;}
            hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;}
            button,input,textarea{margin:0;font:inherit;color:inherit;}
            button{overflow:visible;}
            button{text-transform:none;}
            button,input[type=submit]{-webkit-appearance:button;cursor:pointer;}
            button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0;}
            input{line-height:normal;}
            textarea{overflow:auto;}
            @media print{
            *,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
            a,a:visited{text-decoration:underline;}
            a[href]:after{content:" (" attr(href) ")";}
            img{page-break-inside:avoid;}
            img{max-width:100%!important;}
            h2,p{orphans:3;widows:3;}
            h2{page-break-after:avoid;}
            .navbar{display:none;}
            }
            *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
            :after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
            body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff;}
            button,input,textarea{font-family:inherit;font-size:inherit;line-height:inherit;}
            a{color:#337ab7;text-decoration:none;}
            a:focus,a:hover{color:#23527c;text-decoration:underline;}
            a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
            img{vertical-align:middle;}
            .img-responsive{display:block;max-width:100%;height:auto;}
            hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee;}
            .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0;}
            h1,h2{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
            h1,h2{margin-top:20px;margin-bottom:10px;}
            h1{font-size:36px;}
            h2{font-size:30px;}
            p{margin:0 0 10px;}
            ul{margin-top:0;margin-bottom:10px;}
            .container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
            @media (min-width:768px){
            .container{width:750px;}
            }
            @media (min-width:992px){
            .container{width:970px;}
            }
            @media (min-width:1200px){
            .container{width:1170px;}
            }
            .container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
            .row{margin-right:-15px;margin-left:-15px;}
            .col-md-4,.col-md-6,.col-sm-4,.col-sm-6,.col-xs-12,.col-xs-6{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
            .col-xs-12,.col-xs-6{float:left;}
            .col-xs-12{width:100%;}
            .col-xs-6{width:50%;}
            @media (min-width:768px){
            .col-sm-4,.col-sm-6{float:left;}
            .col-sm-6{width:50%;}
            .col-sm-4{width:33.33333333%;}
            }
            @media (min-width:992px){
            .col-md-4,.col-md-6{float:left;}
            .col-md-6{width:50%;}
            .col-md-4{width:33.33333333%;}
            }
            .form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
            .form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);}
            .form-control::-moz-placeholder{color:#999;opacity:1;}
            .form-control:-ms-input-placeholder{color:#999;}
            .form-control::-webkit-input-placeholder{color:#999;}
            .form-control::-ms-expand{background-color:transparent;border:0;}
            textarea.form-control{height:auto;}
            .form-group{margin-bottom:15px;}
            .btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px;}
            .btn:active:focus,.btn:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
            .btn:focus,.btn:hover{color:#333;text-decoration:none;}
            .btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125);}
            .fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear;}
            .collapse{display:none;}
            .nav{padding-left:0;margin-bottom:0;list-style:none;}
            .nav>li{position:relative;display:block;}
            .nav>li>a{position:relative;display:block;padding:10px 15px;}
            .nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee;}
            .navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent;}
            @media (min-width:768px){
            .navbar{border-radius:4px;}
            }
            @media (min-width:768px){
            .navbar-header{float:left;}
            }
            .navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1);}
            @media (min-width:768px){
            .navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none;}
            .navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important;}
            .navbar-fixed-top .navbar-collapse{padding-right:0;padding-left:0;}
            }
            .navbar-fixed-top .navbar-collapse{max-height:340px;}
            @media (max-device-width:480px) and (orientation:landscape){
            .navbar-fixed-top .navbar-collapse{max-height:200px;}
            }
            .container-fluid>.navbar-collapse,.container-fluid>.navbar-header{margin-right:-15px;margin-left:-15px;}
            @media (min-width:768px){
            .container-fluid>.navbar-collapse,.container-fluid>.navbar-header{margin-right:0;margin-left:0;}
            }
            .navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030;}
            @media (min-width:768px){
            .navbar-fixed-top{border-radius:0;}
            }
            .navbar-fixed-top{top:0;border-width:0 0 1px;}
            .navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px;}
            .navbar-brand:focus,.navbar-brand:hover{text-decoration:none;}
            .navbar-brand>img{display:block;}
            @media (min-width:768px){
            .navbar>.container-fluid .navbar-brand{margin-left:-15px;}
            }
            .navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px;}
            .navbar-toggle:focus{outline:0;}
            .navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px;}
            .navbar-toggle .icon-bar+.icon-bar{margin-top:4px;}
            @media (min-width:768px){
            .navbar-toggle{display:none;}
            }
            .navbar-nav{margin:7.5px -15px;}
            .navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px;}
            @media (min-width:768px){
            .navbar-nav{float:left;margin:0;}
            .navbar-nav>li{float:left;}
            .navbar-nav>li>a{padding-top:15px;padding-bottom:15px;}
            }
            @media (min-width:768px){
            .navbar-right{float:right!important;margin-right:-15px;}
            }
            .navbar-default{background-color:#f8f8f8;border-color:#e7e7e7;}
            .navbar-default .navbar-brand{color:#777;}
            .navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent;}
            .navbar-default .navbar-nav>li>a{color:#777;}
            .navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#333;background-color:transparent;}
            .navbar-default .navbar-toggle{border-color:#ddd;}
            .navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd;}
            .navbar-default .navbar-toggle .icon-bar{background-color:#888;}
            .navbar-default .navbar-collapse{border-color:#e7e7e7;}
            .close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2;}
            .close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5;}
            button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0;}
            .modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0;}
            .modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%);}
            .modal-dialog{position:relative;width:auto;margin:10px;}
            .modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5);}
            @media (min-width:768px){
            .modal-dialog{width:600px;margin:30px auto;}
            .modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5);}
            }
            .clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.row:after,.row:before{display:table;content:" ";}
            .clearfix:after,.container-fluid:after,.container:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.row:after{clear:both;}
            /*! CSS Used from: https://vdeverde.com.ar/plugins/animate/animate.css */
            .animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
            .fadeIn{-webkit-animation-name:fadeIn;animation-name:fadeIn;}
            /*! CSS Used from: https://vdeverde.com.ar/plugins/ionicons/ionicons.min.css */
            .ion-checkmark-round:before,.ion-close-circled:before,.ion-close-round:before,.ion-email:before,.ion-home:before,.ion-ios-cart-outline:before,.ion-iphone:before{display:inline-block;font-family:"Ionicons";speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;text-rendering:auto;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
            .ion-checkmark-round:before{content:"\f121";}
            .ion-close-circled:before{content:"\f128";}
            .ion-close-round:before{content:"\f129";}
            .ion-email:before{content:"\f132";}
            .ion-home:before{content:"\f144";}
            .ion-ios-cart-outline:before{content:"\f3f7";}
            .ion-iphone:before{content:"\f1fa";}
            /*! CSS Used from: https://vdeverde.com.ar/css/web.css */
            .white-txt{color:#fff;}
            .lblue-back{background-color:#e5edee;}
            .btn{border:0;border-radius:50px;padding:7px 20px;font-size:1.2rem;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;line-height:1.42857143;margin:4px;transition:all 0.2s ease 0s;}
            .btn:hover{cursor:pointer;}
            .btnHollow{background-color:transparent;padding:10px 20px;border:1px solid #383838;font-family:"Playfair Display", serif;transition:all 0.2s ease 0s;}
            .btnHollow:hover{background-color:#fff;}
            .border{border:1px solid rgba(39, 36, 23, 0.24);}
            .left-divider-sm{height:2px;border-bottom:1px solid #254460;max-width:250px;margin-bottom:5px;margin-top:5px;}
            .left-divider-xs{height:2px;border-bottom:1px solid #254460;max-width:150px;margin-bottom:5px;margin-top:5px;}
            .horizontal-list ul{padding-left:0;padding:0;margin:0;}
            .horizontal-list ul li{display:inline-block;list-style:none;}
            .centered-info{padding:10px 10px;text-align:center;}
            @media (max-width: 765px){
            .centered-info{padding:20px 40px;}
            .centered-info p{font-size:1rem;}
            }
            .qr-container{position:absolute;bottom:60px;left:20px;}
            .qr-container a{width:150px;height:150px;}
            @media (max-width: 1536px){
            .qr-container{position:relative;bottom:auto;left:auto;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;}
            .qr-container a{margin:20px 0;}
            }
            body{height:100%;overflow-x:hidden;font-size:18px;background-color:#fff;color:#383838;font-family:"Playfair Display", serif;line-height:25px;}
            a{text-decoration:none;color:#bbb7f2;}
            a:hover{text-decoration:none;}
            p{font-size:1.5rem;line-height:1.6rem;font-family:"Raleway", sans-serif;font-weight:400;}
            @media (max-width: 700px){
            p{font-size:1.3rem;}
            }
            h1,h2{font-family:"Playfair Display", serif;}
            h1{font-size:2.5rem;font-weight:400;}
            h2{font-size:1.8rem;font-weight:400;}
            .txC{text-align:center;}
            .margTop50{margin-top:50px;}
            .bt-shadow{text-shadow:5px 2px 10px #000;-webkit-text-shadow:5px 2px 10px #000;-moz-text-shadow:5px 2px 10px #000;-moz-text-shadow:5px 2px 10px #000;-o-text-shadow:5px 2px 10px #000;}
            .bt-shadow3{text-shadow:3px 3px 2px #383838;-webkit-text-shadow:3px 3px 2px #383838;-moz-text-shadow:3px 3px 2px #383838;-moz-text-shadow:3px 3px 2px #383838;-o-text-shadow:3px 3px 2px #383838;}
            .wt-shadow{text-shadow:0px -2px 8px #ffffff;-webkit-text-shadow:0px -2px 8px #ffffff;-moz-text-shadow:0px -2px 8px #ffffff;-moz-text-shadow:0px -2px 8px #ffffff;-o-text-shadow:0px -2px 8px #ffffff;}
            .Hidden{display:none!important;}
            ul{padding-left:0;}
            .navbar{margin-bottom:0;}
            .navbar-default{height:80px;border:0;background-color:#fff;border-radius:0;}
            .navbar-default .navbar-brand{padding:0;padding-top:10px;height:80px;transition:all 0.3s ease 0s;}
            .navbar-default .navbar-brand img{max-height:100%;}
            .navbar-default .navbar-brand:hover{transform:scale(1.2);cursor:pointer;}
            .navbar-default .navbar-nav > li > a{height:80px;line-height:50px;font-family:"Playfair Display", serif;font-weight:400;font-style:italic;font-size:1.6rem;transition:all 0.2s ease 0s;}
            .navbar-default .navbar-nav > li > a:hover{border-bottom:5px solid #a6ce74;}
            @media (max-width: 765px){
            .navbar-nav{background-color:#fff;margin-top:0;}
            .navbar-nav > li > a{height:45px;}
            .navbar-brand{margin-left:20px;}
            .navbar-default .navbar-nav > li > a{height:40px;line-height:15px;}
            .navbar-default .navbar-nav > li > a i{font-size:2rem;}
            .navbar-toggle{margin-top:18px;}
            }
            @media (max-width: 1200px){
            .navbar > .container-fluid .navbar-brand{margin-left:5px;}
            }
            .nav-icon{background-color:#a6ce74;padding-left:10px;padding-right:10px;transition:all 0.2s ease 0s;}
            .nav-icon i{color:#fff;font-size:3rem;}
            .nav-icon:hover{background-color:#8da271;}
            @media (min-width: 1200px){
            .navbar-default{padding-left:50px;padding-right:50px;}
            }
            .mobile-shop-cta{display:none;}
            @media (max-width: 767px){
            .mobile-shop-cta{display:block;float:none;margin:0 auto;padding-top:20px;display:table;table-layout:fixed;min-width:215px;}
            .mobile-shop-cta .text{color:#383838;font-style:italic;padding-top:5px;}
            .mobile-shop-cta .icon{text-align:center;padding-top:4px;float:left;background:#94c471;border-radius:50%;margin-right:5px;width:35px;min-width:35px;height:35px;color:#fff;padding:4px;}
            .mobile-shop-cta .icon:hover{background-color:#5a823d;}
            .mobile-shop-cta .icon i{font-size:2rem;}
            .mobile-shop-cta:hover{cursor:pointer;}
            }
            @media (max-width: 374px){
            .mobile-shop-cta{min-width:auto;padding-top:15px;}
            .mobile-shop-cta .text{padding-top:0px;}
            .mobile-shop-cta .icon{margin-top:8px;}
            }
            .home-banner-container{width:100%;}
            .home-banner-container .home-banner{background:url(https://vdeverde.com.ar/webimages/home/homebanner.jpg) no-repeat center 80px;background-size:cover;height:auto;padding-bottom:80px;padding-top:40px;text-align:center;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;-ms-flex-direction:column;flex-direction:column;z-index:200;}
            .home-banner-container .home-banner .inner{padding:10px;}
            .home-banner-container .home-banner .inner span.title{font-family:"Playfair Display", serif;font-size:5rem;font-weight:900;font-style:italic;line-height:5rem;color:#fff;text-shadow:5px 7px 30px #383838;-webkit-text-shadow:5px 7px 30px #383838;-moz-text-shadow:5px 7px 30px #383838;-moz-text-shadow:5px 7px 30px #383838;-o-text-shadow:5px 7px 30px #383838;}
            .home-banner-container .home-banner .inner hr{border-top:2px solid #fff;max-width:450px;}
            .home-banner-container .home-banner .inner p{color:#fff;font-size:1.5rem;font-weight:400;text-shadow:5px 2px 10px #000;-webkit-text-shadow:5px 2px 10px #000;-moz-text-shadow:5px 2px 10px #000;-moz-text-shadow:5px 2px 10px #000;-o-text-shadow:5px 2px 10px #000;}
            .centered-logo{text-align:center;margin-top:-75px;z-index:400;}
            .centered-logo img{width:150px;}
            @media (max-width: 1000px){
            .home-banner-container .home-banner{padding-top:0;}
            .home-banner-container .home-banner .inner span.title{font-size:4rem;line-height:4rem;}
            }
            @media (max-width: 765px){
            .home-banner-container .home-banner{height:auto;padding-bottom:80px;}
            .home-banner-container .home-banner .inner hr{width:50%;}
            .home-banner-container .home-banner .inner span.title{font-size:3rem;line-height:2.9rem;}
            .home-banner-container .home-banner .inner p{padding:0 2px;}
            }
            @media (max-width: 765px){
            .home-banner-container .home-banner{background:url(webimages/home/homebannermobile.jpg) no-repeat center 80px;background-size:cover;}
            }
            .mosaic-section h1{font-family:"Playfair Display", serif;font-style:italic;}
            @media (max-width: 768px){
            .mosaic-block{display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;-ms-flex-direction:column;flex-direction:column;}
            }
            .bgimg-link{height:280px;padding:2px;text-align:center;}
            .bgimg-link .inner{border-radius:0;height:100%;padding:50px 0;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;-ms-flex-direction:column;flex-direction:column;transition:all 0.2s ease 0s;}
            .bgimg-link .inner h1{margin:0;font-weight:600;}
            .bgimg-link:hover .inner{opacity:0.9;}
            @media (min-width: 1250px){
            .home-banner-container .home-banner{height:780px;}
            }
            @media (min-width: 1250px), screen and (min-height: 750px){
            .home-banner-container .home-banner{height:700px;}
            }
            @media screen and (max-height: 850px){
            .home-banner-container .home-banner{height:650px;}
            }
            @media screen and (max-height: 798px){
            .home-banner-container .home-banner{height:550px;}
            }
            @media screen and (max-height: 692px){
            .home-banner-container .home-banner{height:450px;}
            }
            @media screen and (max-height: 600px){
            .home-banner-container .home-banner{height:390px;}
            }
            @media screen and (max-height: 700px){
            .bgimg-link{height:150px;}
            .bgimg-link .inner p{line-height:1.5rem;font-size:1.2rem;}
            .bgimg-link .inner h1{font-size:2rem;text-align:center;}
            }
            @media screen and (max-height: 580px){
            .bgimg-link{height:140px;}
            .bgimg-link .inner p{line-height:1.2rem;font-size:1.2rem;}
            .bgimg-link .inner h1{font-size:1.5rem;text-align:center;}
            }
            @media screen and (max-height: 500px){
            .bgimg-link{height:130px;}
            .bgimg-link .inner p{line-height:1rem;font-size:1.2rem;}
            .bgimg-link .inner h1{font-size:1.5rem;text-align:center;}
            }
            @media screen and (min-height: 840px){
            .bgimg-link{height:250px;}
            }
            @media (max-width: 768px){
            .bgimg-link{height:160px;}
            .bgimg-link .inner p{line-height:1rem;font-size:1.2rem;}
            .bgimg-link .inner h1{font-size:2rem;text-align:center;}
            }
            @media (max-width: 768px){
            .bgimg-link{max-width:400px;}
            .bgimg-link .inner p{font-size:1.2rem;}
            }
            .blue-back-link{background-color:#254460;}
            @media (min-width: 1000px){
            .blue-back-link p{font-size:1.2rem;}
            }
            .accesorios-img-link{background:url(webimages/home/accesorioslink.jpg) no-repeat center center;background-size:cover;}
            .maderas-img-link{background:url(webimages/home/regaloslink.jpg) no-repeat center center;background-size:cover;}
            .huerta-img-link{background:url(webimages/home/huertalink.jpg) no-repeat center center;background-size:cover;}
            @media (max-width: 768px){
            .huerta-img-link,.accesorios-img-link{background-position:bottom;}
            }
            .urbana-img-link{background:url(webimages/home/urbanalink.jpg) no-repeat center center;background-size:cover;}
            .blog-img-link{background:url(webimages/home/bloglink.jpg) no-repeat center center;background-size:cover;}
            .blog-img-link h1,.blog-img-link p{color:#254460;}
            .shop-preview{padding:0 10px 45px;max-width:950px;margin:0 auto;}
            .shop-preview .action{margin-top:35px;}
            @media screen and (max-height: 700px){
            .shop-preview{max-width:750px;}
            }
            .social-banner{background:url(webimages/home/banner-redes.jpg) no-repeat center center;background-size:cover;text-align:center;padding:40px 10px;}
            .social-banner h1{color:#fff;margin-bottom:20px;margin-top:0;}
            .social-banner .inner img{width:100px;transition:all 0.5s ease 0s;}
            .social-banner .inner img:hover{cursor:pointer;-webkit-transform:rotate(-10deg);-webkit-transform-transform:rotate(-10deg);}
            .newsletter-popup{text-align:center;position:fixed;}
            .newsletter-popup .modal-content{position:relative;background-color:#fff;padding:15px;border:0;border-radius:0;outline:0;padding:0;}
            .newsletter-popup .modal-content .header-image{position:relative;}
            .newsletter-popup .modal-content .header-image .close-modal{position:absolute;top:10px;right:10px;}
            .newsletter-popup .modal-content .header-image .close-modal .close{font-size:30px;text-shadow:0 1px 0 #dc0707;}
            .newsletter-popup .modal-content .header-image img{max-width:100%;width:100%;}
            .newsletter-popup .modal-content .inner-content{padding:20px;}
            .newsletter-popup .modal-content .inner-content h2{font-size:2.5rem;margin:0;margin-bottom:20px;}
            .newsletter-popup .modal-content .inner-content p{font-size:1.3rem;margin-bottom:20px;}
            .newsletter-popup .modal-content .inner-content .newsbutton{border:0;background-color:#254460;color:#fff;padding:4px 20px;margin:0;}
            .newsletter-popup .modal-content .inner-content .muted{margin-top:10px;font-size:1rem;color:#383838;}
            .newsletter-popup .modal-content .inner-content input{padding:2px 10px;}
            @media (max-width: 768px){
            .modal{padding:0!important;}
            .modal-dialog{margin:0;}
            }
            .newsletter-banner{padding:20px 10px;background-color:#c1dd9e;}
            .newsletter-banner .inner1 .image{float:left;width:80px;margin-right:15px;}
            .newsletter-banner .inner1 .text span.title{font-size:1.8rem;}
            .newsletter-banner .inner1 .text p{font-size:1.2rem;}
            .newsletter-banner .inner2{padding-top:22px;}
            .newsletter-banner .inner2 .form-inline input{width:50%;max-width:100%;height:40px;padding:0 10px;}
            .newsletter-banner .inner2 .form-inline .newsbutton{border:0;background-color:#254460;color:#fff;padding:7px;margin:0;}
            @media (max-width: 991px){
            .newsletter-banner .inner2,.newsletter-banner .inner1{display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;}
            .newsletter-banner .inner2 .form-inline{min-width:100%;text-align:center;}
            }
            @media (max-width: 765px){
            .newsletter-banner{padding:10px 5px;}
            }
            .shop-preview-block .shop-item-preview{padding:5px;}
            .shop-preview-block .shop-item-preview .inner{border:1px solid #ccc;}
            .shop-preview-block .shop-item-preview .inner .image{margin-bottom:5px;transition:all 0.4s ease 0s;}
            .shop-preview-block .shop-item-preview .inner .description{padding:10px;}
            .shop-preview-block .shop-item-preview .inner .description .title{padding:0 5px;font-family:"Raleway", sans-serif;}
            .shop-preview-block .shop-item-preview .inner .description .text{font-family:"Raleway", sans-serif;padding:5px;margin-bottom:5px;font-size:1rem;line-height:1.4rem;}
            .shop-preview-block .shop-item-preview .inner .description .price{font-family:"Lato", sans-serif;padding:5px;font-weight:600;font-size:2rem;}
            .shop-preview-block .shop-item-preview .inner:hover .image{filter:opacity(0.7);cursor:pointer;}
            @media screen and (max-height: 800px){
            .shop-preview-block .shop-preview{max-width:750px;}
            }
            @media screen and (max-height: 710px){
            .shop-preview-block .shop-preview{max-width:680px;}
            .shop-preview-block .shop-preview .inner .description{padding:2px;}
            .shop-preview-block .shop-preview .inner .description .title{font-size:1.3rem;}
            .shop-preview-block .shop-preview .inner .description .price{font-size:1.6rem;}
            .shop-preview-block .shop-preview .inner .image{margin-bottom:5px;}
            }
            @media (max-width: 647px){
            .shop-preview{display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;-ms-flex-direction:column;flex-direction:column;}
            }
            .contact-section{padding:45px 10px;}
            .contact-section .inner .form form{position:relative;}
            .contact-section .inner .form input,.contact-section .inner .form textarea{border-radius:0;font-size:1.5rem;}
            .contact-section .inner .form input{height:50px;}
            .contact-section .inner .form .title{font-size:1.8rem;font-family:"Playfair Display", serif;font-weight:600;margin-bottom:10px;display:none;}
            .contact-section .inner .address-data{font-family:"Raleway", sans-serif;}
            .contact-section .inner .address-data .title{font-size:1.8rem;font-family:"Playfair Display", serif;font-weight:600;margin-bottom:10px;}
            .contact-section .inner .address-data .subtitle{font-size:1.4rem;margin-bottom:10px;}
            .contact-section .inner .address-data .text{font-size:1.2rem;line-height:18px;margin-bottom:15px;}
            .contact-section .inner .address-data .data-container{margin-bottom:20px;margin-top:15px;min-width:180px;}
            .contact-section .inner .address-data .data-container .data-title{color:#254460;}
            .contact-section .inner .address-data .data-container .data{font-size:1.2rem;}
            @media (max-width: 991px){
            .contact-section .inner .address-data{margin-top:25px;}
            .contact-section .inner .address-data .title{display:none;}
            .contact-section .inner .form .title{display:block;}
            }
            .closeForm{position:absolute;right:2px;top:2px;}
            .closeForm:hover{cursor:pointer;}
            .form-response{padding-top:45px;text-align:center;}
            .form-response .icon{font-size:3rem;color:#a6ce74;margin-bottom:10px;}
            .form-response .big-text{font-size:1.8rem;font-weight:600;color:#777;margin-bottom:10px;}
            .form-response .small-text{font-size:1.4rem;color:#777;margin-bottom:10px;}
            footer{background-color:#ccc;padding-left:0!important;padding-right:0!important;background-color:#f9f9f9;}
            footer .copyright{background-color:#ececec;padding:10px 5px;text-align:center;color:#254460;font-family:"Raleway", sans-serif;font-weight:200;font-size:1.3rem;font-weight:400;}
            /*! CSS Used from: Embedded */
            .page_speed_770456319{margin-top:-80px;}
            .page_speed_659744609{color:#fff;}
            .page_speed_2042705392{color:#000;}
            .page_speed_1196602352{margin-top:0;}
            .page_speed_2054372408{max-width:80px;}
            .page_speed_1911534507{font-size:15px;}
            /*! CSS Used from: Embedded */
            #nvxvxWb-1562184511419{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:0px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;}
            /*! CSS Used keyframes */
            @-webkit-keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
            @keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
            /*! CSS Used fontfaces */
            @font-face{font-family:"Ionicons";src:url("plugins/fonts/ionicons.eot?v=2.0.0");src:url("plugins/fonts/ionicons.eot?v=2.0.0#iefix") format("embedded-opentype"),url("plugins/fonts/ionicons.ttf?v=2.0.0") format("truetype"),url("plugins/fonts/ionicons.woff?v=2.0.0") format("woff"),url("plugins/fonts/ionicons.svg?v=2.0.0#Ionicons") format("svg");font-weight:normal;font-style:normal;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:400;src:local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFkD-vYSZviVYUb_rj3ij__anPXDTnohkk72xU.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:400;src:local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojUk72xU.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:400;src:local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojEk72xU.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:400;src:local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFkD-vYSZviVYUb_rj3ij__anPXDTnogkk7.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:700;src:local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu4DRmBKY.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:700;src:local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu6zRmBKY.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:700;src:local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu6jRmBKY.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:700;src:local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu5DRm.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:900;src:local('Playfair Display Black Italic'), local('PlayfairDisplay-BlackItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFnD-vYSZviVYUb_rj3ij__anPXDTngAW4u4DRmBKY.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:900;src:local('Playfair Display Black Italic'), local('PlayfairDisplay-BlackItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFnD-vYSZviVYUb_rj3ij__anPXDTngAW4u6zRmBKY.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:900;src:local('Playfair Display Black Italic'), local('PlayfairDisplay-BlackItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFnD-vYSZviVYUb_rj3ij__anPXDTngAW4u6jRmBKY.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
            @font-face{font-family:'Playfair Display';font-style:italic;font-weight:900;src:local('Playfair Display Black Italic'), local('PlayfairDisplay-BlackItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFnD-vYSZviVYUb_rj3ij__anPXDTngAW4u5DRm.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
            @font-face{font-family:'Playfair Display';font-style:normal;font-weight:400;src:local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
            @font-face{font-family:'Playfair Display';font-style:normal;font-weight:400;src:local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
            @font-face{font-family:'Playfair Display';font-style:normal;font-weight:400;src:local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
            @font-face{font-family:'Playfair Display';font-style:normal;font-weight:400;src:local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v14/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
            @font-face{font-family:'Raleway';font-style:normal;font-weight:200;src:local('Raleway ExtraLight'), local('Raleway-ExtraLight'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptrg8zYS_SKggPNwOIpWqhPAMif.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
            @font-face{font-family:'Raleway';font-style:normal;font-weight:200;src:local('Raleway ExtraLight'), local('Raleway-ExtraLight'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptrg8zYS_SKggPNwOIpWqZPAA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
            @font-face{font-family:'Raleway';font-style:normal;font-weight:400;src:local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
            @font-face{font-family:'Raleway';font-style:normal;font-weight:400;src:local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
            @font-face{font-family:'Raleway';font-style:normal;font-weight:600;src:local('Raleway SemiBold'), local('Raleway-SemiBold'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptrg8zYS_SKggPNwPIsWqhPAMif.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
            @font-face{font-family:'Raleway';font-style:normal;font-weight:600;src:local('Raleway SemiBold'), local('Raleway-SemiBold'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptrg8zYS_SKggPNwPIsWqZPAA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
            @font-face{font-family:'Raleway';font-style:normal;font-weight:800;src:local('Raleway ExtraBold'), local('Raleway-ExtraBold'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptrg8zYS_SKggPNwIouWqhPAMif.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
            @font-face{font-family:'Raleway';font-style:normal;font-weight:800;src:local('Raleway ExtraBold'), local('Raleway-ExtraBold'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptrg8zYS_SKggPNwIouWqZPAA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
            </style>
        {{-- <script data-ad-client="ca-pub-7540234395148040" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> --}}
	</head>
	<body>
		<header>
			@include('web.layouts.partials.nav')
		</header>
        
        {{-- CONTENT --}}

        

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
                <a href="{{ url('https://vdeverde.mitiendanube.com/') }}">
                    <div class="inner maderas-img-link border">
                        <h1 class="white-txt">REGALOS <br>EMPRESARIALES</h1>
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
                <a href="{{ url('https://vdeverde.mitiendanube.com/') }}">
                    <div class="inner accesorios-img-link">
                        <h1 class="white-txt bt-shadow">ACCESORIOS</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mosaic-block">
            <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="500ms">
                <a href="{{ url('https://vdeverde.mitiendanube.com/') }}">
                    <div class="inner huerta-img-link">
                        <h1 class="white-txt bt-shadow">DECO</h1>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 bgimg-link wow animated fadeIn" data-wow-delay="600ms">
                <a href="{{ url('https://vdeverde.mitiendanube.com/') }}">
                    <div class="inner urbana-img-link">
                        <h1 class="white-txt bt-shadow">HUERTAS</h1>
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
                        <a href="{{ url('https://vdeverde.mitiendanube.com/') }}">
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
                        <a href="{{ url('https://vdeverde.mitiendanube.com/') }}">
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
                        <a href="{{ url('https://vdeverde.mitiendanube.com/') }}">
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
        {{-- END CONTENT --}}
		<div class="row qr-container">
			<a href="https://qr.afip.gob.ar/?qr=4eudXoohi0uG3EyBb0rmHA,," target="_F960AFIPInfo">
			<img src="https://www.afip.gob.ar/images/f960/DATAWEB.jpg" border="0" style="max-width: 80px"></a>
		</div>
        @include('web.layouts.partials.foot')
		<script type="text/javascript" src="{{asset('plugins/jquery/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        {{-- <script type="text/javascript" src="{{ asset('js/web.js') }}"></script> --}}
		<!--Start of Tawk.to Script-->
        <script type="text/javascript">

            $('#BtnNavContainer').click(function(){
                
                const nav = $('#NavContainer');

                if( nav.hasClass("collapse") ) {
                    nav.removeClass("collapse");
                } else {
                    nav.addClass("collapse");
                }
                
            });

            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/5b283bd061a2e64e5fb595c7/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();

            // Check Broken Portfolio Images
            // $('.CheckImgPortfolio').on('error', function(){
            // 	var defaultImg = "{{ asset('webimages/gen/portfolio-gen.jpg') }}"
            // 	$(this).attr('src', defaultImg);
            // });

            // // Check Broken Blog Images
            // $('.CheckImgBlog').on('error', function(){
            // 	var defaultImg = "{{ asset('webimages/gen/blog-gen.jpg') }}"
            // 	$(this).attr('src', defaultImg);
            // });
        

            $('#ContactFormMayorist').hide();
            $('#OpenFormMayoristBtn').click(function(){
                $('#ContactForm').hide(500);
                $('#ContactFormMayorist').show(500);
            });

            $('.CloseFormMayorist').click(function(){
                $('#ContactFormMayorist').hide(500);
                $('#ContactForm').show(500);
            });
            

            $(document).on('submit','#ContactForm',function(e){
                e.preventDefault();

                var data   = $(this).serialize();
                var route  = "{{ url('ajax_mail') }}";
                var loader = '<br><img src="{{ asset("images/loaders/loader-sm.svg") }}"/>';

                $.ajax({
                    type: "POST",
                    url: route,
                    dataType: 'json',
                    data: data,
                    beforeSend: function(){
                        $('#ContactBtn').val('Enviando...');
                        $('.FormLoader').html(loader);
                    },
                    success: function(data) {
                        $('#ContactForm').hide();
                        $('#ContactBtn').hide('Enviar');
                        $('#FormSuccess').removeClass('Hidden');
                        $('#FormResponse').hide();
                        $('#Error').html(data.responseText);
                        console.log(data);
                    },
                    error: function(data) {
                        $('#FormResponse').hide();
                        $('#ContactForm').hide();
                        $('#FormError').removeClass('Hidden');
                        $('#Error').html(data.responseText);
                        console.log(data);
                    },
                    complete: function(data){
                        $('#ContactBtn').html('Enviar');
                        $('.FormLoader').html('');
                    }
                });

            });

            $(document).on('submit','#ContactFormMayorist',function(e){
                e.preventDefault();

                var data   = $(this).serialize();
                var route  = "{{ url('ajax_mail_mayorist') }}";
                var loader = '<br><img src="{{ asset("images/loaders/loader-sm.svg") }}"/>';

                $.ajax({
                    type: "POST",
                    url: route,
                    dataType: 'json',
                    data: data,
                    beforeSend: function(){
                        $('#ContactMayoristBtn').val('Enviando...');
                        $('.FormLoader').html(loader);
                    },
                    success: function(data) {
                        $('#ContactFormMayorist').hide();
                        $('#ContactMayoristBtn').hide('Enviar');
                        $('#FormSuccess').removeClass('Hidden');
                        $('#FormResponse').hide();
                    },
                    error: function(data) {
                        $('#FormResponse').hide();
                        $('#ContactFormMayorist').hide();
                        $('#FormError').removeClass('Hidden');
                        console.log(data);
                    },
                    complete: function(data){
                        $('#ContactMayoristBtn').html('Enviar');
                        $('.FormLoader').html('');
                    }
                });

            });

        </script>
    </body>
    
</html>
