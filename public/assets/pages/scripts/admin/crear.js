$(document).ready(function () {
    Sies.validacionGeneral('form-general');

    $('#icono').on('blur', function(){
        $('#mostrar-icono').removeClass().addClass('fa fa-fw ' + $(this).val());
    });
});