
     <!-- Início do form -->
     <!-- Nome -->
     <div class="form-group">
         <div class="row">
             <div class="col-lg-12">
                 <label for="nome_funcionario">Nome : </label>
                 <input type="text"
                        name="nome_funcionario"
                        class="form-control"
                        id="nome_funcionario"
                        value="{{isset($funcionario->nome) ? $funcionario->nome : old('nome_funcionario')}}"
                 >
                 @if ($errors->has('nome_funcionario'))
                     <span class="help-block text-danger">
                            <strong>{{ $errors->first('nome_funcionario') }}</strong>
                        </span>
                 @endif
             </div>
         </div>
     </div>
     <!-- Nome -->


     <!-- Nome -->
        <div class="form-group">
            <div class="row">
                <div class="col-lg-6">
                    <label for="data_nascimento">Nome : </label>
                    <input type="date"
                           name="data_nascimento"
                           class="form-control"
                           id="data_nascimento"
                           value="{{isset($funcionario->data_nascimento) ? $funcionario->data_nascimento : old('data_nascimento')}}"
                    >
                    @if ($errors->has('data_nascimento'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('data_nascimento') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-lg-6">
                    <label for="cargo_id">Cargo : </label>
                    <select type="text"
                            name="cargo_id"
                            class="form-control"
                            id="cargo_id"
                    >
                        <option selected>Selecione uma Opção</option>
                        @foreach($cargos as $cargo)
                            <option {{isset($funcionario->cargo_id) && $funcionario->cargo_id == $cargo->id ? "selected" : ""}}  value="{{$cargo->id}}">
                                {{$cargo->nome}}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('cargo_id'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('cargo_id') }}</strong>
                     </span>
                    @endif
                </div>
            </div>
        </div>
     <!-- Nome -->

     <!-- Salário e Nome -->
     <div class="form-group">
         <div class="row">
             <!-- Salário -->
             <div class="col-lg-6">
                 <label for="salario">Salário : </label>
                 <input type="text"
                        name="salario"
                        class="form-control"
                        id="salario"
                        value="{{isset($funcionario->salario) ? $funcionario->salario : old('salario')}}"
                 >
                 @if ($errors->has('salario'))
                     <span class="help-block text-danger">
                    <strong>{{ $errors->first('salario') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Salário -->
             <!-- Apelido -->
             <div class="col-lg-6">
                 <label for="apelido">Apelido : </label>
                 <input type="text"
                        name="apelido"
                        class="form-control"
                        id="apelido"
                        value="{{isset($funcionario->apelido) ? $funcionario->apelido : old('apelido')}}"
                 >
                 @if ($errors->has('apelido'))
                     <span class="help-block text-danger">
                  <strong>{{ $errors->first('apelido') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Apelido -->
         </div>
     </div>
     <!-- Salário e Apelido -->

     <!-- RG e Nome -->
     <div class="form-group">
         <div class="row">
             <!-- RG -->
             <div class="col-lg-6">
                 <label for="rg">RG : </label>
                 <input type="text"
                        name="rg"
                        class="form-control"
                        id="rg"
                        value="{{isset($funcionario->rg) ? $funcionario->rg : old('rg')}}"
                 >
                 @if ($errors->has('rg'))
                     <span class="help-block text-danger">
                    <strong>{{ $errors->first('rg') }}</strong>
                </span>
                 @endif
             </div>
             <!-- RG -->
             <!-- CPF -->
             <div class="col-lg-6">
                 <label for="cpf">CPF : </label>
                 <input type="text"
                        name="cpf"
                        class="form-control"
                        id="cpf"
                        value="{{isset($funcionario->cpf) ? $funcionario->cpf : old('cpf')}}"
                 >
                 @if ($errors->has('cpf'))
                     <span class="help-block text-danger">
                  <strong>{{ $errors->first('cpf') }}</strong>
                </span>
                 @endif
             </div>
             <!-- CPF -->
         </div>
     </div>
     <!-- RG e CPF -->


     <!-- Sexo e Nome -->
     <div class="form-group">
         <div class="row">
             <!-- Sexo -->
             <div class="col-lg-6">
                 <label for="sexo">Sexo : </label>
                 <select type="text"
                         name="sexo"
                         class="form-control"
                         id="sexo"
                 >
                     <option {{isset($funcionario->sexo) && $funcionario->sexo == "SOLTEIRO"  ? "selected" : ""}}
                             value="MASCULINO">Masculino</option>
                     <option {{isset($funcionario->sexo) && $funcionario->sexo == "CASADO"  ? "selected" : ""}}
                             value="FEMININO">Feminino</option>
                 </select>
                 @if ($errors->has('estado_civil'))
                     <span class="help-block text-danger">
                       <strong>{{ $errors->first('estado_civil') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- Sexo -->
             <!-- CPF -->
             <div class="col-lg-6">
                 <label for="estado_civil">estado Cívil : </label>
                 <select type="text"
                         name="estado_civil"
                         class="form-control"
                         id="estado_civil"
                 >
                     <option {{isset($funcionario->estado_civil) && $funcionario->estado_civil == "SOLTEIRO"  ? "selected" : ""}}
                             value="SOLTEIRO">Solteiro</option>
                     <option {{isset($funcionario->estado_civil) && $funcionario->estado_civil == "CASADO"  ? "selected" : ""}}
                             value="CASADO">Casado</option>
                     <option {{isset($funcionario->estado_civil) && $funcionario->estado_civil == "DIVORSIADO"  ? "selected" : ""}}
                             value="DIVORSIADO">Divorsiado</option>
                     <option {{isset($funcionario->estado_civil) && $funcionario->estado_civil == "VIUVO"  ? "selected" : ""}}
                             value="VIUVO">Divorsiado</option>
                 </select>
                 @if ($errors->has('estado_civil'))
                     <span class="help-block text-danger">
                       <strong>{{ $errors->first('estado_civil') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- CPF -->
         </div>
     </div>
     <!-- Sexo e CPF -->


     <!-- Login e Senha -->
     <div class="form-group">
         <div class="row">
             <!-- Login -->
             <div class="col-lg-6">
                 <label for="login">Login : </label>
                 <input type="text"
                        name="login"
                        class="form-control"
                        id="login"
                        value="{{isset($funcionario->login) ? $funcionario->login : old('login')}}"
                 >
                 @if ($errors->has('login'))
                     <span class="help-block text-danger">
                    <strong>{{ $errors->first('login') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Login -->
             <!-- Senha -->
             <div class="col-lg-6">
                 <label for="senha">Senha : </label>
                 <input type="password"
                        name="senha"
                        class="form-control"
                        id="senha"
                        value="{{isset($funcionario->senha) ? $funcionario->senha : old('senha')}}"
                 >
                 @if ($errors->has('senha'))
                     <span class="help-block text-danger">
                  <strong>{{ $errors->first('senha') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Senha -->
         </div>
     </div>
     <!-- Login e Senha -->


    <!-- Observação -->
    <div class="form-group">
        <label for="observacao">Observação : </label>
        <textarea
               name="observacao"
               class="form-control"
               id="observacao"
        >{{isset($funcionario->observacao) ? $funcionario->observacao : old('observacao')}}</textarea>
        @if ($errors->has('observacao'))
            <span class="help-block text-danger">
              <strong>{{ $errors->first('observacao') }}</strong>
            </span>
        @endif
    </div>
    <!-- Observação -->


     <!-- Salário e Nome -->
     <div class="form-group">
         <div class="row">
             <!-- Salário -->
             <div class="col-lg-6">
                 <label for="unidade_id">Unidade : </label>
                 <select type="text"
                         name="unidade_id"
                         class="form-control"
                         id="unidade_id"
                 >
                     <option selected>Selecione uma Opção</option>
                     @foreach($unidades as $unidade)
                         <option {{isset($funcionario->unidade_id) && $funcionario->unidade_id == $unidade->id ? "selected" : ""}}  value="{{$unidade->id}}">{{$unidade->nome_fantasia}}</option>
                     @endforeach
                 </select>
                 @if ($errors->has('unidade_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('unidade_id') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- Salário -->
             <!-- Apelido -->
             <div class="col-lg-6" id="departamento_div">
                 <label for="departamento_select">Departamento : </label>
                 <select type="text"
                         {{isset($funcionario->departamento_id) ? "" : "disabled"}}
                         name="departamento_id"
                         class="form-control"
                         id="departamento_select"
                 >
                     <option {{isset($funcionario->departamento_id) ? "value='".$funcionario->departamento_id."'" : "value=''"}}
                     >
                         {{isset($funcionario->departamento->nome) ? $funcionario->departamento->nome : "Selecione um Sub Grupo"}}
                     </option>
                 </select>
                 @if ($errors->has('d_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('d_id') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- Apelido -->
         </div>
     </div>
     <!-- Salário e Apelido -->


    <!-- Fim do form -->                                                                                                                                                                                                                                                                                                                           