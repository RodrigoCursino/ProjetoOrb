$(document).ready(function () {
  $('#salvar_fornecedor').on('click',function () {
     $('#form_fornecedor').submit();
  });
  window.getCod = function (cod) {
      $('#cod').val(cod);
  }
});