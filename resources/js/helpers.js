$(document).ready(function () {
    window.deleteElement = function (route) {
        $('#form_delete').attr('action', route);
        $('#form_delete').submit();
    }
});