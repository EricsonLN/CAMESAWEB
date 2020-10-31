/*======== Formulario Contacto ========*/
$("#formContact").submit(function () {
  let url = "send_contact.php";
  $.ajax({
    type: "post",
    url: url,
    data: $("#formContact").serialize(),
    success: function (data) {
      $("#respta").html(data);
    },
  });
  $(".panel_confi").addClass("active_panel");
  return false;
});
