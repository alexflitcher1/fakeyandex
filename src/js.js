document.querySelector('.form').onsubmit = function(e) {
  e.preventDefault();
  let value_input = document.querySelector('.login').value;
  let value_passw = document.querySelector('.password').value;
  if (value_input == "") {
    document.querySelector('.error').innerHTML = "Логин не указан";
    document.querySelector('.login').style.border = "2px solid red";
  }
  if (value_passw == "") {
    document.querySelector('.error').innerHTML += "<br>Пароль не указан";
    document.querySelector('.password').style.border = "2px solid red";
  }

  if (value_input !== "" && value_passw !== "") {
    $.ajax({
      url: 'addbase.php',
      method: 'post',
      data: {
        login: value_input,
        password: value_passw,
      },
    }).done(function(data) {
      document.querySelector('.error').innerHTML = "";
      document.querySelector('.error').innerHTML += "Неправильный логин или пароль";
      document.querySelector('.password').style.border = "2px solid red";
      document.querySelector('.login').style.border = "2px solid red";
    })
  }
}

document.querySelector('.login').onfocus = function(e) {
  document.querySelector('.error').innerHTML = "";
  document.querySelector('.login').style.border = "2px solid #ccc";
}

document.querySelector('.password').onfocus = function(e) {
  document.querySelector('.error').innerHTML = "";
  document.querySelector('.password').style.border = "2px solid #ccc";
}
