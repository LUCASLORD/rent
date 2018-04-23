<div class="row">
    <div class="input-field col xl3">
        {!! Form::select('category_id', $categories, null) !!}
        {!! Form::label('category_id','Categoria:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('model', null, ['class'=>'validade']) !!}
        {!! Form::label('model','Modelo:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('brand', null, ['class'=>'validade']) !!}
        {!! Form::label('brand','Marca:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('color', null, ['class'=>'validade']) !!}
        {!! Form::label('color','Cor:') !!}
    </div>
</div>
<div class="row">
    <div class="input-field col xl3">
        {!! Form::text('engine', null, ['class'=>'validade']) !!}
        {!! Form::label('engine','Motorização:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('fuel', null, ['class'=>'validade']) !!}
        {!! Form::label('fuel','Combustivel:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('year', null, ['class'=>'validade']) !!}
        {!! Form::label('year','Ano-Modelo:') !!}
    </div>
    <div class="input-field col xl3">
        {!! Form::text('license', null, ['class'=>'validade']) !!}
        {!! Form::label('license','Airbags:') !!}
    </div>
</div>
