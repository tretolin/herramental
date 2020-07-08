import api from './Api/api';

$(document).ready(function () {

  if($("#login-form")) {
    $("#login-form").validate({
      rules: {
          required: true,
          email: true
      },
      messages: {
        email: {
          required: 'Se requiere un correo electrónico',
          email: 'Ingrese un email correcto'
        }
      },
    submitHandler: function(form, event) {
      event.preventDefault();
      var formData = new FormData(form);
      var data = JSON.stringify(Object.fromEntries(formData));
      api.login(data, function (data) {
          console.log('data', data)
      })
    }
  });
  }

  if ($("#recovery-form")) {
    $("#recovery-form").validate({
      rules: {
          email: 'required'
      },
      messages: {
        email: 'Es necesario un correo'
      },
      submitHandler: function(form, event) {
        event.preventDefault();
        var formData = new FormData(form);    
        var data = Object.fromEntries(formData);
        api.passwordRecovery(data, function (data) {
            console.log(data)
        })
      }
    });
  }

})

