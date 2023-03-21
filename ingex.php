<?php include("path.php")?>
<!doctype html>
<html lang="en">
  <?php include(INCLUDE_URL . "head.php"); ?>
  <body>
    <section>
      <div class="container">
        <div class="index-cont">
          <div class="title">
            <h1>Добро пожаловать!</h1>
            <p>Если вы на нашем сайте впервые,<br> то нажмите "Регистрация"!</p>
          </div>
          <div class="buttons">
            <h2><a class="btn" href="<?php echo BASE_URL . "reg.php"?>">Регистрация</a></h2>
            <h2><a class="btn" href="<?php echo BASE_URL . "login.php"?>">Авторизация</a></h2>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>