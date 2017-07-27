<div id="contact" class="container-fluid contact-section">
	<div class="container wow animated fadeIn">
		<div class="row inner">
			{{-- <h1>CONTACTANOS !</h1> --}}
			<div class="col-md-6 form">
				<div class="title">Contáctanos</div>
				{!! Form::open(['id' => 'ContactForm', 'url' => 'sendmail', 'method' => 'POST']) !!}
					<div class="form-group">
						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre / empresa', 'required' => '']) !!}
					</div>
					<div class="form-group">
						{!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'Teléfono / Celular', 'required' => '']) !!}
					</div>
					<div class="form-group">
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Dirección de E-Mail', 'required' => '']) !!}
					</div>
						<div class="form-group">
						{!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Mensaje o Consulta', 'required' => '']) !!}
					</div>
					{{ csrf_field() }}
					{!! Form::submit('Enviar', ['id' => 'ContactBtn', 'class' => 'btnHollow']) !!}
				
				{!! Form::close() !!}
				{!! Form::open(['id' => 'ContactFormMayorist', 'url' => 'sendmail']) !!}
					<div class="CloseFormMayorist closeForm"><i class="ion-close-circled"></i></div>
					<h1 style="margin-top:0">Contacto Mayorístas</h1>
					<div class="form-group">
						{!! Form::text('contacto', null, ['class' => 'form-control', 'placeholder' => 'Nombre del encargado', 'required' => '']) !!}
					</div>
					<div class="form-group">
						{!! Form::text('nombretienda', null, ['class' => 'form-control', 'placeholder' => 'Tienda / Local', 'required' => '']) !!}
					</div>
					<div class="form-group">
						{!! Form::text('localidad', null, ['class' => 'form-control', 'placeholder' => 'Localidad', 'required' => '']) !!}
					</div>
					<div class="form-group">
						{!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Dirección']) !!}
					</div>
					<div class="form-group">
						{!! Form::text('webfacebook', null, ['class' => 'form-control', 'placeholder' => 'Web / Facebook']) !!}
					</div>
					<div class="form-group">
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Dirección de E-Mail', 'required' => '']) !!}
					</div>
					<div class="form-group">
						{!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required' => '']) !!}
					</div>
						<div class="form-group">
						{!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Mensaje o Consulta', 'required' => '']) !!}
					</div>
					{{ csrf_field() }}
					{!! Form::submit('Enviar', ['id' => 'ContactMayoristBtn', 'class' => 'btnHollow']) !!}
				{!! Form::close() !!} 
				<div class="FormLoader"></div>
				<div id="FormSuccess" class="form-response Hidden">
					<div class="icon"><i class="ion-checkmark-round"></i></div>
					<div class="big-text">Mensaje enviado !</div>
					<div class="small-text">Gracias por comunicarse con nosotros.</div>
					<div class="small-text"><b>Nos estaremos contactando a la brevedad.</b></div>
				</div>
				<div id="FormError" class="form-response Hidden">
					<div class="icon"><i class="ion-close-round"></i></div>
					<div class="big-text">UPS!</div>
					<div class="small-text">Ha ocurrido un error</div>
					<div class="small-text"><b>Pruebe de contactarse directamente a nuestro e-mail <br> o a nuestros teléfonos.<br> Gracias.</b></div>
				</div>
			</div>
			<div class="col-md-6 address-data">
				<div class="title">Contáctanos</div>
				<div class="subtitle">Soluciones personalizadas a tu medida</div>
				<div class="text">
					Dejanos tu mensaje o consulta, me pondré en contacto
					contigo lo antes posible para concretar una visita.
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-6 data-container">
						<div class="data-title"><i class="ion-email"></i> E-MAIL</div>	
						<div class="left-divider-xs"></div>
						<div class="data">info@vdeverde.com.ar</div>	
					</div>
					 <div class="col-md-6 col-xs-6 data-container">
						<div class="data-title"><i class="ion-home"></i> UBICACIÓN</div>
						<div class="left-divider-xs"></div>
						<div class="data">Pilar & Capital Federal</div>	
					</div> 
					<div class="col-md-6 col-xs-6 data-container">
						<div class="data-title"><i class="ion-iphone"></i> CELULAR</div>
						<div class="left-divider-xs"></div>
						<div class="data">+54 (11) 6259-1337</div>	
					</div>
					{{--<div class="col-md-6 col-xs-6 data-container">
						<div class="data-title"><i class="ion-android-call"></i> TELÉFONO</div>	
						<div class="left-divider-xs"></div>
						<div class="data">4682-4545</div>	
					</div> --}}
				
				</div>
				<div class="title">Mayorístas</div>
				<div class="text">
					Si tenés una tienda y querés ser parte de nuestros
					puntos de venta escribinos.
				</div>
				<button id="OpenFormMayoristBtn" class="btnHollow">Contáctanos</button>

			</div>

		</div> {{-- Row --}}
	</div> {{-- Container --}}
</div> {{-- Container-Fluid --}}