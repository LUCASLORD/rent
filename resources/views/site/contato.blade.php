@extends('layouts.loca')

@section('content')

<div class="container">
    <div class="row section">
        <h3 align="center">Contato</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m7">
            <img src="{{asset('img/carro.jpg')}}" alt="" class="responsive-img">
        </div>
        <div class="col s12 m5">
            <form action="" class="col s12">
                <div class="input-field">
                    <input type="text" name="name" class="validate">
                    <label for="name">Nome</label>
                </div>
                <div class="input-field">
                    <input type="text" name="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field">
                    <textarea name="mensagem" class="materialize-textarea"></textarea>
                    <label for="mensagem">Mensagem</label>
                </div>
                <button class="btn blue">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection