<div id="contacto" class="container-fluid social-banner wow animated fadeIn" data-wow-delay="300ms">
        <div class="container">
            <div class="row inner">
                <h1><i>Seguinos en:</i></h1>
                <div class="horizontal-list">
                    <ul>
                        <li><a href="https://www.facebook.com/vdeverdear/" target="_blank">
                            <img src="{{ asset('webimages/icons/red1.png') }}" class="img-responsive" alt="">
                            </a></li>
                        <li><a href="https://www.instagram.com/vdeverde/" target="_blank">
                            <img src="{{ asset('webimages/icons/red2.png') }}" class="img-responsive" alt="">
                            </a></li>
                        <li><a href="https://twitter.com/VdeVerdear" target="_blank">
                            <img src="{{ asset('webimages/icons/red5.png') }}" class="img-responsive" alt="">
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid newsletter-banner wow animated fadeIn" data-wow-delay="300ms">
        <div class="container">
            <div class="col-md-6 inner1">
                <div class="image">
                    <img src="{{ asset('webimages/logos/logonews.png') }}" class="img-responsive" alt="">
                </div>
                <div class="text">
                    <span class="title">Suscribite a nuestro Newsletter!</span>
                    <p>
                        Recibí todas las novedades suscribiendote a
                        nuestro newsletter.
                    </p>
                </div>
            </div>
            {!! Form::open(['id' => 'NewsletterForm']) !!}
            <div class="col-md-6 inner2">
                <div class="form-inline">
                    <input id="NewsletterEmail" type="email" name="email" required="">
                    <button id="NewsletterBtn" class="newsbutton">Suscribirse</button>
                </div>
            </div>
            
            {!! Form::close() !!} 
            <div id="ErrorNewsletter"></div>
        </div>    
    </div>