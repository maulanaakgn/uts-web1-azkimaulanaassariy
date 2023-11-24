var input = document.getElementById("nohp");

$(document).ready(function () {
  var email = $('#emailr'),
      password = $('#passwordr'),
      confirmPassword = $('#kon-password'),
      no_telp = $('#nohp'),
      emailValid = true,
      confirmPasswordValid = true,
      no_telpValid = true;

  email.on('input', function () {
      var re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if (email.val() !== '') {
          if (!re.test(email.val())) {
              emailValid = false;
          } else {
              emailValid = true;
          }
      } else {
          emailValid = false;
      }

      validateForm();
  });

  no_telp.on('input', function () {
      if (no_telp.val() !== '') {
          no_telpValid = true;
      } else {
          no_telpValid = false;
      }

      validateForm();
  });

  confirmPassword.on('input', function () {
      if (confirmPassword.val() !== '') {
          if (confirmPassword.val() !== password.val()) {
              confirmPasswordValid = false;
          } else {
              confirmPasswordValid = true;
          }
      } else {
          confirmPasswordValid = false;
      }

      validateForm();
  });

  $('#terms').on('change', function () {
      validateForm();
  });

  function validateForm() {
      if (emailValid && confirmPasswordValid && $('#terms').is(':checked') && no_telpValid) {
          $('.btn-regis').prop('disabled', false);
      } else {
          $('.btn-regis').prop('disabled', true);
      }
  }
});

