<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="auth.css">
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <meta http-equiv="Cache-Control" content="no-cache">
    <title>Авторизация</title>
  </head>
  <body>
     <div class="content">
        <div class="auth">
            <div class="logo">
                <img src="logo.png" alt="Yandex">
            </div>
            <div class="text">
              Войдите, чтобы продолжить
            </div>
            <div class="form-div">
                <form class="form">
                  <input type="text" class="login" name="login" placeholder="Введите логин, почту или телефон">
                  <input type="password" name="password" class="password" placeholder="Ввведите пароль">
                  <p class="error"></p>
                  <input type="submit" value="Войти">
                </form>
            </div>
            <div class="singup">
                 <a href="https://passport.yandex.ru/registration?origin=home_desktop_ru&retpath=https%3A%2F%2Fmail.yandex.ru%2F&process_uuid=baca08c3-ae1a-4e38-9142-30f8b369c2f9">Зарегестрироваться</a>
            </div>
            <div class="with">
              <img src="with.png" alt="With">
            </div>
        </div>
     </div>
  <script src="js.js" charset="utf-8"></script>
  </body>
</html>
