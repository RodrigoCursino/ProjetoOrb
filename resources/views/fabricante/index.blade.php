@extends('layouts.app')

@section('content')
        {{--<div class="main-panel">--}}
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Fabricante</h2>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <a class="btn btn-secondary btn-round"
                                   href="{{route('fabricantes.create')}}"
                                   {{--data-toggle="modal"--}}
                                   {{--data-target="#formFornecedor"--}}
                                >
                                    Add Fabricante
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    <div class="row row-card-no-pd">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title">Fabricantes</h4>
                                        <div class="card-tools">
                                            {{$fabricantes->links()}}
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="table-responsive table-hover">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome Fantasia</th>
                                                            <th>Razão Social</th>
                                                            <th>CNPJ</th>
                                                            <th>Inscrição Estadual</th>
                                                            <th>Telefone</th>
                                                            <th>Editar</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($fabricantes as $fabricante)
                                                        <tr>
                                                            <td>{{$fabricante->nome_fantasia}}</td>
                                                            <td>{{$fabricante->razao_social}}</td>
                                                            <td>{{$fabricante->cnpj}}</td>
                                                            <td>{{$fabricante->ie}}</td>
                                                            <td>{{$fabricante->contato->telefone}}</td>
                                                            <td>
                                                                <a class="btn btn-primary"
                                                                   href="{{route('fabricantes.edit',['id' => $fabricante->id])}}"
                                                                >
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger" onclick="deleteElement('{{route("fabricantes.destroy",["id" => $fabricante->id])}}')"
                                                                >
                                                                    <i class="fa fa-trash">
                                                                    </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
        {{--</div>--}}
@endsection