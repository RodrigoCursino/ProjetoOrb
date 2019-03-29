
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
                        value="{{old('agencia')}}"
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
                        value="{{old('conta')}}"
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
         <!-- Banco -->
         <div class="col-lg-6">
             <label for="banco_id">Banco : </label>
             <select type="text"
                     name="banco_id"
                     class="form-control"
                     id="banco_id"
             >
                 @foreach($bancos as $banco)
                     <option value="{{$banco->id}}">{{$banco->nome}}</option>
                 @endforeach
             </select>
             @if ($errors->has('banco_id'))
                 <span class="help-block text-danger">
            <strong>{{ $errors->first('banco_id') }}</strong>
         </span>
             @endif
         </div>
         <!-- Banco -->
         <!-- Código -->
            <div class="col-lg-6">
             <label for="cod">Código : </label>
             <input type="text"
                    name="cod"
                    class="form-control"
                    id="cod"
                    value="{{old('cod')}}"
             >
             @if ($errors->has('cod'))
                 <span class="help-block text-danger">
                  <strong>{{ $errors->first('cod') }}</strong>
                </span>
             @endif
         </div>
         <!-- Código -->
         </div>
     </div>
     <!-- Banco E Conta -->


    <!-- Fim do form -->