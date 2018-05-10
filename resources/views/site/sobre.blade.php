@extends('layouts.loca')

@section('content')

<div class="container">
    <div class="row section">
        <h3 align="center">Sobre</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m6">
            @if(isset($dados->map))
                <div class="video-container">
                    {!! $dados->map !!}
                </div>

            @else
                <img src="{{asset($dados->image)}}" alt="" class="responsive-img">
            @endif
        </div>
        <div class="col s12 m6">

            <h4>{{$dados->title}}</h4>

            <blockquote>
                {{$dados->description}}
            </blockquote>
            <p>{{$dados->text}}</p>
        </div>
    </div>

</div>

@endsection