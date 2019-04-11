$(document).ready(function () {
    $('#unidade_id').on('change', function () {

        // web
        var _url = "/departamentos/" + $('#unidade_id').val();

        $.ajax({
            url: _url,
            method: 'GET',
            success: function (response) {

                // criando select de sub grupos
                $("#departamento_select").remove();

                $('<select>', {
                    id: 'departamento_select',
                    class: 'form-control',
                    name: 'departamento_select'
                }).appendTo('#departamento_div');

                $('<option value="">' +
                    'Selecione um Departamento' +
                    '</option>'
                ).appendTo('#departamento_select');
                $.each(response, function(key, value){
                    $('<option value="'+parseInt(value.id)+'">'+
                        value.nome
                        +'</option>')
                        .appendTo('#departamento_select');
                });
            }
        })

    });
});