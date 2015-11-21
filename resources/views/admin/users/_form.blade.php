<div class="form-group">
    {!! Form::label('Name', 'Nome: ') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email', 'Email: ') !!}
    {!! Form::email('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Role', 'Grupo: ') !!}
    {!! Form::select('role', array('admin' => 'Administrador', 'client' => 'Cliente', 'deliveryman' => 'Entregador'), null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Password', 'Senha: ') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Password_confirmation', 'Confirmar Senha: ') !!}
    {!! Form::password('password_confirmation',  ['class'=>'form-control']) !!}
</div>

