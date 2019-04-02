$(document).ready(function () {
    $('#grupo_id').on('change', function () {

        // web
        var _url = "/sub_grupos/" + $('#grupo_id').val();

        $.ajax({
            url: _url,
            method: 'GET',
            success: function (response) {
                // criando select de sub grupos
                $("#sub_grupo_id").remove();

                $('<select>', {
                    id: 'sub_grupo_id',
                    class: 'form-control',
                    name: 'sub_grupo_id'
                }).appendTo('#sub_grupos');

                $('<option value="">Selecione uma unidade</option>').appendTo('#sub_grupo_id');
                $.each(response, function(key, value){
                    $('<option value="'+value.id+'">'+value.nome+'</option>').appendTo('#sub_grupo_id');
                });
            }
        })

    });
});