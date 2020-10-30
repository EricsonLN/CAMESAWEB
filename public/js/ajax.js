/*======== Formulario Contacto ========*/
$('#formContact').submit(function () {
    let url = "send.php";
    $.ajax({
        type: "post",
        url: url,
        data: $('#formContact').serialize(),
        success: function (data) {
            $('#rspta').html(data)
        }
    });
    $('.panel_confi').addClass('active_panel');
    return false;
});
