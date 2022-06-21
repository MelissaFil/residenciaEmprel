$(function () {
    $("#tipoSelect").change(function () {
        if ($(this).val() == '1') {
            $("#comidaProblemas").removeClass('d-none')
        }else{
            $("#comidaProblemas").addClass('d-none')

        }
    })

})