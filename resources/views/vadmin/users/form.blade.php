<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del usuario', 'required' => '', 'maxlength' => '120', 'minlength' => '4']) !!}
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email', 'required' => '']) !!}
    {!! Form::label('role', 'Rol') !!}
    {!! Form::select('role', ['1' => 'SuperAdministrador', '2' => 'Administrador', '3' => 'Invitado'], null, 
    ['class' => 'form-control', 'placeholder' => 'Seleccione una opción...', 'required'])!!}
    {!! Form::label('groups', 'Grupo:') !!}
    {!! Form::select('groups', ['1' => 'Miembro', '2' => 'Usuario'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required' => '']) !!}
</div>