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
            {!! Form::open(['class' => 'NewsletterForm']) !!}
            <div class="col-md-6 inner2">
                <div class="form-inline">
                    <input class="NewsletterEmail" type="email" name="email" placeholder="E-mail" required="">
                    <button class="NewsletterBtn" class="newsbutton">Suscribirse</button>
                </div>
            </div>
            
            {!! Form::close() !!} 
            <div class="ErrorNewsletter"></div>
        </div>    
    </div>

    <!-- Newsletter trigger modal -->
    <div class="modal fade newsletter-popup" id="NewsletterPopup" tabindex="-1" role="dialog" aria-labelledby="newsletter" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="header-image">
                    <img src="{{ asset('images/gral/newsletter.jpg') }}" alt="">
                    <div class="close-modal">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="inner-content">
                    <h2>Suscribite a nuestro Newsletter!</h2>
                    <p>
                        Recibí todas las novedades suscribiendote a
                        nuestro newsletter.
                    </p>
                    {!! Form::open(['class' => 'NewsletterForm']) !!}
                        <div class="form-inline">
                            <input class="NewsletterEmail" type="email" name="email" placeholder="E-mail" required="">
                            <button class="NewsletterBtn" class="newsbutton">Suscribirse</button>
                        </div>
                    {!! Form::close() !!} 
                    <p class="muted">Ingresá tu e-mail y hacé click en "Suscribirse"</p>
                </div>
            </div>
        </div>
    </div>