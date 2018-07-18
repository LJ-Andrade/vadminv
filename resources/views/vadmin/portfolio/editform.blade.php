{{--  <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
{{-- Title --}}
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        {!! Form::label('title', 'Título') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del artículo', 'id' => 'TitleInput', 
        'required' => '', 'maxlength' => '120', 'minlength' => '4']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slug', 'Url - Dirección web') !!}
        {!! Form::text('slug', null, ['class' => 'SlugInput form-control', 'placeholder' => 'Dirección visible (en explorador)', 'id' => 'SlugInput', 'required' => '']) !!}
        <div class="slug2"></div>
        <p class="muted-small-text"> La URL no debe contener espacios, caracteres extraños ni acentos. Solo palabras en minúsculas separadas con guiones. (Ej.: este-es-un-slug-correcto)</p>
    </div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        {!! Form::label('category_id', 'Categoría') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control Select-Category', 'placeholder' => 'Seleccione una opcion',
        'required' => '']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Estado') !!}
        {!! Form::select('status', ['active' => 'Activo','paused' => 'Pausado'], null, ['class' => 'form-control']) !!}
    </div>
</div>	
<div class="col-md-12">
    @if($article->filename != '')
    <div class="text-center actual-image">
        <div class="inner">
            <img id="ActualImage" class="CheckImgPortfolio" src="{{ asset('webimages/portfolio/'.$article->thumb ) }}" alt="">
            
            
            <div class="overlay">Cambiar imágen</div>
        </div>
    </div>
    <div>
        <input id="SingleImage" type="file" name="image">
    </div>
    @else
        
    <div class="form-group">
        {!! Form::label('image', 'Imágen') !!}
        <span style="font-size: 12px"> | Formatos soportados: jpeg, jpg, png, gif</span>
        <input type="file" name="image" id="SingleImage">
        <div class="ErrorImage"></div>
    </div>
    @endif
</div>
