<div class="row inner-row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del usuario', 'required' => '', 'maxlength' => '120', 'minlength' => '4']) !!}
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email', 'required' => '']) !!}
            {!! Form::label('role', 'Rol') !!}
            {!! Form::select('role', ['1' => 'SuperAdministrador', '2' => 'Administrador', '3' => 'Invitado'], null, 
            ['class' => 'form-control', 'placeholder' => 'Seleccione una opción...', 'required'])!!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('password', 'Contraseña:') !!}
            <input class="form-control" name="password" type="password" value="" required="" data-parsley-equalto="#PassConfirmation">
            {!! Form::label('password', 'Repita la contraseña:') !!}
            <input id="PassConfirmation" class="form-control" name="password-confirm" type="password" value="" required="">
            {!! Form::label('groups', 'Grupo:') !!}
            {!! Form::select('groups', ['1' => 'Miembro', '2' => 'Usuario'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required' => '']) !!}
        </div>
    </div>
</div>
