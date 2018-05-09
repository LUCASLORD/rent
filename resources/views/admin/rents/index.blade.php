@extends('layouts.admin')

@section('content')
    <div class="container">
        <h5>Locações</h5>
        <br><br>

        <table class="centered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Preço</th>
                <th>Desconto</th>
                <th>data</th>
                <th>Itens</th>
                <th>Status</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach( $rents as $rent )
                <tr>
                    <td>{{$rent->id}}</td>
                    <td>{{$rent->total_price}}</td>
                    <td>{{$rent->discount}}</td>
                    <td>{{$rent->created_at}}</td>
                    <td>
                        <ul>
                        @foreach($rent->items as $item)
                            <li>{{$item->vehicle->model}}</li>
                        @endforeach
                        </ul>
                    </td>
                    <td>{{$rent->status}}</td>
                    <td>
                        <a href="{{route('admin.rents.edit',['id'=>$rent->id])}}" class="btn btn-small">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$rents->links()}}
    </div>
@endsection
