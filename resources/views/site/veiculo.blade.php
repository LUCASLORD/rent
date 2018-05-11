@extends('layouts.loca')

@section('content')
    <div class="container">
        <div class="row section">
            <h3 align="center">{{$vehicle->model}}</h3>
            <div class="divider"></div>
        </div>
        <div class="row section">
            <div class="col s12 m8">
                <div class="row">
                    <div class="slider">
                        <ul class="slides">
                            <li>
                                <img src="{{asset('img/slides/modelo_slide_1.jpg')}}" alt="">
                                <div class="caption center-align">
                                    <h3>This is our big Tagline!</h3>
                                    <h5 class="light grey-text ">Here's our small slogan.</h5>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('img/slides/modelo_slide_2.jpg')}}" alt="">
                                <div class="caption left-align">
                                    <h3>Left Aligned Caption</h3>
                                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('img/slides/modelo_slide_3.jpg')}}" alt="">
                                <div class="caption right-align">
                                    <h3>Right Aligned Caption</h3>
                                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row" align="center">
                    <button onclick="" class="btn btn-small blue">Anterior</button>
                    <button onclick="sliderNext()" class="btn btn-small blue">Proximo</button>
                </div>
            </div>
            <div class="col s12 m4">
                <h4>{{$vehicle->category->name}}</h4>
                <blockquote>
                    Descrição sobre carro
                </blockquote>
                <p><b>código</b> {{$vehicle->id}}</p>
            </div>
        </div>

    </div>

@endsection