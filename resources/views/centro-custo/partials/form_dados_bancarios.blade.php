
     <!-- Conta E Agência -->
     <div class="form-group">
         <div class="row">
             <!-- Agência -->
             <div class="col-lg-6">
                 <label for="agencia">Agência : </label>
                 <input type="text"
                        name="agencia"
                        class="form-control"
                        id="agencia"
                        value="{{isset($centroCusto->dadosBancarios->agencia) ? $centroCusto->dadosBancarios->agencia : old('agencia')}}"
                 >
                 @if ($errors->has('agencia'))
                     <span class="help-block text-danger">
                    <strong>{{ $errors->first('agencia') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Agência -->
             <!-- Conta -->
             <div class="col-lg-6">
                 <label for="conta">Conta : </label>
                 <input type="text"
                        name="conta"
                        class="form-control"
                        id="conta"
                        value="{{isset($centroCusto->dadosBancarios->conta) ? $centroCusto->dadosBancarios->conta : old('conta')}}"
                 >
                 @if ($errors->has('conta'))
                     <span class="help-block text-danger">
                  <strong>{{ $errors->first('conta') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Conta -->
         </div>
     </div>
     <!-- Conta E Agência -->


     <!-- Banco E Conta -->
     <div class="form-group">
         <div class="row">
         <!-- Tipo de Conta -->
             <div class="col-lg-6">
                 <label for="banco_id">Tipo de Conta : </label>
                 <select typ    e="text"
                         name="tipo"
                         class="form-control"
                         id="tipo"
                 >
                      <option {{isset($centroCusto->dadosBancarios->tipo) && $centroCusto->dadosBancarios->tipo == "CORRENTE"  ? "selected" : ""}}
                              value="CORRENTE">Corrente</option>
                      <option {{isset($centroCusto->dadosBancarios->tipo) && $centroCusto->dadosBancarios->tipo == "POUPANÇA"  ? "selected" : ""}}
                              value="POUPANÇA">Poupança</option>
                 </select>
                 @if ($errors->has('tipo'))
                     <span class="help-block text-danger">
                       <strong>{{ $errors->first('tipo') }}</strong>
                     </span>
                 @endif
             </div>
         <!-- Tipo de Conta -->
         <!-- Banco -->
         <div class="col-lg-6">
             <label for="banco_id">Banco : </label>
             <select type="text"
                     name="banco_id"
                     class="form-control"
                     id="banco_id"
             >
                 @foreach($bancos as $banco)
                     <option {{isset($centroCusto->dadosBancarios->banco_id) && $centroCusto->dadosBancarios->banco_id == $banco->id  ? "selected" : ""}}
                             value="{{$banco->id}}"
                     >
                         {{$banco->nome}}
                     </option>
                 @endforeach
             </select>
             @if ($errors->has('banco_id'))
                  <span class="help-block text-danger">
                     <strong>{{ $errors->first('banco_id') }}</strong>
                  </span>
             @endif
         </div>
         <!-- Banco -->
         </div>
     </div>
     <!-- Banco E Conta -->


    <!-- Fim do form -->