<div class="row">
    <div class="input-field col xl3">
        {!! Form::text('user[name]', null, ['class'=>'validade']) !!}
        {!! Form::label('Name','Nome:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('user[email]', null, ['class'=>'validade']) !!}
        {!! Form::label('email','E-mail:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('cpf_cnpj', null, ['class'=>'validade']) !!}
        {!! Form::label('cpf_cnpj','CPF/CNPJ:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('phone', null, ['class'=>'validade']) !!}
        {!! Form::label('phone','Telefone:') !!}
    </div>
</div>
<div class="row">
    <div class="input-field col xl3">
        {!! Form::text('address', null, ['class'=>'validade']) !!}
        {!! Form::label('address','Endereço:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::number('number', null, ['class'=>'validade']) !!}
        {!! Form::label('number','Número:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('neighborhood', null, ['class'=>'validade']) !!}
        {!! Form::label('neighborhood','Bairro:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('zipcode', null, ['class'=>'validade']) !!}
        {!! Form::label('zipcode','CEP:') !!}
    </div>
</div>
<div class="row">
    <div class="input-field col xl3">
        {!! Form::text('city', null, ['class'=>'validade']) !!}
        {!! Form::label('city','Cidade:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('state', null, ['class'=>'validade']) !!}
        {!! Form::label('state','Estado:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('country', null, ['class'=>'validade']) !!}
        {!! Form::label('country','País:') !!}
    </div>
</div>