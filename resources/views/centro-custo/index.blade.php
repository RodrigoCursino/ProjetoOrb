@extends('layouts.app')

@section('content')
    {{--<div class="main-panel">--}}
    <div class="content">
        <div class="panel-header bg-primary-grey">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Centro Custo</h2>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a class="btn btn-secondary btn-round"
                           href="{{route('centroscusto.create')}}"
                                {{--data-toggle="modal"--}}
                                {{--data-target="#formFornecedor"--}}
                        >
                            Add Centro Custo
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
                                <h4 class="card-title">Centros Custo</h4>
                                <div class="card-tools">
                                    {{$centrosCusto->links()}}
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
                                                <th>Nome</th>
                                                <th>Editar</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($centrosCusto as $centroCusto)
                                                <tr>
                                                    <td>{{$centroCusto->nome}}</td>
                                                    <td>
                                                        <a class="btn btn-primary"
                                                           href="{{route('centroscusto.edit',['id' => $centroCusto->id])}}"
                                                        >
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger"
                                                                onclick="deleteElement('{{route("centroscusto.destroy",["id" => $centroCusto->id])}}')"
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