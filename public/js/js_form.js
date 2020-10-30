$("#formContact").validate({
  submitHandler: function (form) {
    $.ajax({
      type: "POST",
      url: "send_contact.php",
      data: $(form).serialize(),
      success: function (data) {
        $("#respta").html(data);
      },
    });
    $(".panel_confi").addClass("active_panel");
    return false;
  },
  rules: {
    nombres: {
      required: true,
    },
    correo: {
      required: true,
      email: true,
    },
    telefono: {
      required: true,
      number: true,
    },
    asunto: {
      required: true,
    },
  },
  messages: {
    nombres: {
      required: "Este campo es requerido.",
    },
    correo: {
      required: "Este campo es requerido.",
      email: "Por favor, introduce una dirección de correo electrónico válida.",
    },
    telefono: {
      required: "Este campo es requerido.",
      number: "Por favor ingrese un número valido.",
    },
    asunto: {
      required: "Este campo es requerido.",
    },
  },
  errorPlacement: function (label, element) {
    label.addClass("mt-2 text-danger");
    label.insertAfter(element);
  },
  highlight: function (element, errorClass) {
    $(element).parent().addClass("has-danger");
    $(element).addClass("form-control-danger");
  },
});
