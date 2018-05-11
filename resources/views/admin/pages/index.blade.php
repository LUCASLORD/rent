@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row"></div>
        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{route('admin.home')}}" class="breadcrumb">Início</a>
                        <a href="#" class="breadcrumb">Lista de Páginas</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Tipo</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{$page->id}}</td>
                        <td>{{$page->title}}</td>
                        <td>{{$page->description}}</td>
                        <td>{{$page->type}}</td>
                        <td>
                            <a href="{{route('admin.pages.edit',['id'=>$page->id])}}" class="btn btn-small">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection