<div class="modal fade"
     id="formFornecedor"
     tabindex="-1"
     role="dialog"
     aria-labelledby="formFornecedorTitle"
     aria-hidden="true"
     data-backdrop="static"
>
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="formFornecedorTitle">Adicionar Fornecedor</h5>
                  <a type="#" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </a>
              </div>
              <div class="modal-body">
                  @include('fornecedor.partials.form')
              </div>
              <div class="modal-footer">
                  <a class="btn btn-secondary" data-dismiss="modal">Close</a>
                  <button type="button" class="btn btn-primary" id="salvar_fornecedor">Salvar</button>
              </div>
        </div>
    </div>
</div>