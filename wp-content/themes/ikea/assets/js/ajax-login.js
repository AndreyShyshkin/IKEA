jQuery(document).ready(function ($) {
  // Обработка формы входа
  $("#login_form").submit(function (e) {
    e.preventDefault();
    var user_login = $("#user_login").val();
    var user_pass = $("#user_pass").val();

    $.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "custom_login",
        user_login: user_login,
        user_pass: user_pass,
      },
      success: function (response) {
        $("#login_result").html(response);
      },
    });
  });

  // Обработка формы регистрации
  $("#registration_form").submit(function (e) {
    e.preventDefault();
    var user_login = $("#user_login_reg").val();
    var user_email = $("#user_email_reg").val();
    var user_pass = $("#user_pass_reg").val();

    $.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "custom_registration",
        user_login: user_login,
        user_email: user_email,
        user_pass: user_pass,
      },
      success: function (response) {
        $("#registration_result").html(response);
      },
    });
  });
});
