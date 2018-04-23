@extends('layouts.loca')

@section('content')

<div class="container">
    <div class="row section">
        <h3 align="center">Sobre</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m6">
            <img src="{{asset('img/carro.jpg')}}" alt="" class="responsive-img">
        </div>
        <div class="col s12 m6">
            <h4>A empresa</h4>
            <blockquote>
                Descrição sobre a empresa
            </blockquote>
            <p>texto sobre a empresa</p>
        </div>
    </div>

</div>

@endsection