<div class="sidebar" data-background-color="tmontec-dark">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('imagens/logo-branco.png') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                {{ \Illuminate\Support\Facades\Auth::user()->name }}
                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="../demo2/index.html">
                                    <span class="sub-item">Dashboard 2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item active submenu">
                    <a data-toggle="collapse" href="#submenu">
                        <i class="fas fa-bars"></i>
                        <p>Menu Levels</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <!-- fornecedor -->
                            <li>
                                <a data-toggle="collapse" href="#fornecedor">
                                    <span class="sub-item">Fornecedor</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="fornecedor">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{route('fornecedores.index')}}">
                                                <span class="sub-item">Listagem</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('fornecedores.create')}}">
                                                <span class="sub-item">Cadastro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- fornecedor -->
                            <!-- ncm -->
                            <li>
                                <a data-toggle="collapse" href="#ncm">
                                    <span class="sub-item">NCM</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="ncm">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{route('ncms.index')}}">
                                                <span class="sub-item">Listagem</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('ncms.create')}}">
                                                <span class="sub-item">Cadastro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ncm -->
                            <!-- mercadoria -->
                            <li>
                                <a data-toggle="collapse" href="#mercadoria">
                                    <span class="sub-item">Mercadoria</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="mercadoria">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{route('mercadorias.index')}}">
                                                <span class="sub-item">Listagem</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('mercadorias.create')}}">
                                                <span class="sub-item">Cadastro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- grupo -->
                            <li>
                                <a data-toggle="collapse" href="#grupo">
                                    <span class="sub-item">Grupo</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="grupo">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{route('grupos.index')}}">
                                                <span class="sub-item">Listagem</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('grupos.create')}}">
                                                <span class="sub-item">Cadastro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- grupo -->
                            <!-- linha -->
                            <li>
                                <a data-toggle="collapse" href="#linha">
                                    <span class="sub-item">Linha</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="linha">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{route('linhas.index')}}">
                                                <span class="sub-item">Listagem</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('linhas.create')}}">
                                                <span class="sub-item">Cadastro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- linha -->
                            <!-- categoria -->
                            <li>
                                <a data-toggle="collapse" href="#categoria">
                                    <span class="sub-item">Categoria</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="categoria">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{route('categorias.index')}}">
                                                <span class="sub-item">Listagem</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('categorias.create')}}">
                                                <span class="sub-item">Cadastro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- categoria -->
                            <!-- colecao -->
                            <li>
                                <a data-toggle="collapse" href="#colecao">
                                    <span class="sub-item">Coleção</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="colecao">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{route('colecoes.index')}}">
                                                <span class="sub-item">Listagem</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('colecoes.create')}}">
                                                <span class="sub-item">Cadastro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- colecao -->
                            <!-- marca -->
                            <li>
                                <a data-toggle="collapse" href="#marca">
                                    <span class="sub-item">Marca</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="marca">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{route('marcas.index')}}">
                                                <span class="sub-item">Listagem</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('marcas.create')}}">
                                                <span class="sub-item">Cadastro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- marca -->
                            <!-- cargo -->
                            <li>
                                <a data-toggle="collapse" href="#cargo">
                                    <span class="sub-item">Cargo</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="cargo">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{route('cargos.index')}}">
                                                <span class="sub-item">Listagem</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('cargos.create')}}">
                                                <span class="sub-item">Cadastro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- cargo -->
                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
