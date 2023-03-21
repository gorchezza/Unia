<?php include("path.php")?>
<!doctype html>
<html lang="en">
  <? include(INCLUDE_URL . "head.php")?>
  <body>
    <section>
      <div class="container">
        <div class="reg-cont">
          <div class="title-reg">
            <h1>Регистрация</h1>
          </div>
          <div class="form-container">
            <form name="" method="post" action="#">
                <fieldset class="names">
                    <legend>ФИО</legend>
                    <div class="inputs-reg">
                        <div class="cont-inp">
                            <input class="reg-inp" type="text" name="firstname" placeholder="Фамилия" />
                        </div>
                        <div class="cont-inp">
                            <input class="reg-inp" type="text" name="secondname" placeholder="Имя" />
                        </div>
                        <div class="cont-inp">
                            <input class="reg-inp" type="text" name="threename" placeholder="Отчество" />
                        </div>
                    </div>
                </fieldset>
                <fieldset class="pasport">
                    <legend>Паспортные данные</legend>
                    <div class="inputs-reg">
                        <div class="cont-inp">
                            <input class="reg-inp" type="text" name="id-pass" placeholder="Серия и номер паспорта" />
                        </div>
                        <div class="cont-inp">
                            <input class="reg-inp" type="text" name="date" placeholder="Дата выдачи" />
                        </div>
                        <div class="cont-inp">
                            <input class="reg-inp" type="text" name="from" placeholder="Кем выдан" />
                        </div>
                    </div>
                    <div class="inputs-reg">
                        <div class="cont-inp">
                            <input class="reg-inp" type="text" name="brith-date" placeholder="Дата рождения" />
                        </div>
                        <div class="cont-inp">
                            <input class="reg-inp" type="text" name="brith-place" placeholder="Место рождения" />
                        </div>
                        <div class="cont-inp">
                            <input class="reg-inp" type="text" name="resident-place" placeholder="Место проживания" />
                        </div>
                    </div>
                </fieldset>
                <div class="inputs-reg">
                    <div class="cont-inp">
                        <input class="reg-inp" type="email" name="email" placeholder="Почта" />
                    </div>
                    <div class="cont-inp">
                        <input class="reg-inp" type="password" name="password" placeholder="Пароль" />
                    </div>
                </div>
                <div class="addition">
                    <h3>Есть аккаунт? <a class="reg" href="<?php echo BASE_URL . "login.php"?>">Авторизация</a></h3>
                </div>
                <div class="submit">   
                    <button class="btn" type="submit"><h2>Зарегистрироваться</h2></button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>