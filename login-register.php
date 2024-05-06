<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Вход</title>
      <link rel="stylesheet" href="vhod.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="login-form">
         <div class="text">
            Авторизация
         </div>
<form action="updown.php" method="post">
                                          <input type="text" name="login" placeholder="Имя пользователя" required>
                                          <input type="password" name="password" placeholder="Пароль" required>
                                          <div class="button-box">
                                            <div class="login-toggle-btn">
                                              <a href="forgot_password.php">Забыли пароль?</a> <!-- Ссылка на страницу восстановления пароля -->
                                            </div>
                                            <button type="submit"><span>Авторизоваться</span></button>
                                            <!-- Вывод ошибок -->
                                            <?php echo $error_message; ?>
                                          </div>
                                        </form>

    <br>
         <div class="text">
            Регистрация
<div id="lg2" class="tab-pane">
                                      <div class="login-form-container">
                                        <div class="login-register-form">
                                          <form id="registrationForm" action="register.php" method="post">
                                            <input type="text" name="login" placeholder="Имя пользователя" required>
                                            <input name="email" placeholder="Email" type="email" required>
                                            <input type="tel" name="tel" pattern="[0-9]{11}" placeholder="Номер телефона" required>
                                            <input type="password" id="password" name="password" placeholder="Пароль" required>
                                            <input type="password" id="passwordtry" name="passwordtry" placeholder="Повторите пароль" required>
                                            <span id="password-error" class="error-message"></span> 
                                            <input type="hidden" name="role" value="admin">
                                            <div class="button-box">
                                              <button type="submit" name="regist"><span>Зарегистрироваться</span></button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
      </div>
   </body>
</html>