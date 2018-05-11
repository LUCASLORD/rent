<div class="row section">
    <h3 align="center">Carros</h3>
    <div class="divider"></div>
    <br>

</div>
<div class="row section">
    @foreach($vehicles as $vehicle)
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <a href="#"><img src="{{asset('img/carro.jpg')}}" alt=""></a>
                </div>
                <div class="card-content">
                    <p><b class="deep-orange-text darken-1">{{$vehicle->category->name}}</b></p>
                    <p><b>{{$vehicle->model}}</b></p>
                    <p>{{$vehicle->brand}}</p>
                    <p>R${{$vehicle->price}}</p>
                </div>
                <div class="card-action">
                    <a href="{{route('site.vehicle',['id'=>$vehicle->id])}}">Ver Mais</a>
                </div>
            </div>
        </div>
    @endforeach
</div>