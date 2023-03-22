<?php
include("path.php");
include("app/controllers/users.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unia</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="reg-cont">
                <div class="title-reg">
                    <h1>Регистрация</h1>
                    <p class='error'><?=$errForma?></p>
                </div>
                <div class="form-container">
                    <form name="" method="post" action="reg.php">
                        <fieldset class="names">
                            <legend>ФИО</legend>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="second-name" value="<?=$second_name?>" placeholder="Фамилия"
                                        required />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="first-name" value="<?=$first_name?>" placeholder="Имя" required />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="three-name" value="<?=$three_name?>" placeholder="Отчество"
                                        required />
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="pasport">
                            <legend>Паспортные данные</legend>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="id-pass" value="<?=$id_passport?>" placeholder="Серия и номер паспорта" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="reg-date" value="<?=$register_date?>" placeholder="Дата выдачи" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="issued" value="<?=$issued?>" placeholder="Кем выдан" />
                                </div>
                            </div>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="brith-date" value="<?=$brith_date?>" placeholder="Дата рождения" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="brith-place" value="<?=$brith_place?>" placeholder="Место рождения" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="resident-place" value="<?=$resident_place?>" placeholder="Место проживания" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="inputs-reg">
                            <div class="cont-inp">
                                <input class="reg-inp" type="email" name="email" value="<?=$email?>" placeholder="Почта" />
                            </div>
                            <div class="cont-inp">
                                <input class="reg-inp" type="password" name="password" " placeholder="Пароль" />
                            </div>
                        </div>
                        <div class="addition">
                            <h3>Есть аккаунт? <a class="reg" href="<?php echo BASE_URL . "login.php" ?>">Авторизация</a>
                            </h3>
                        </div>
                        <div class="submit">
                            <button class="btn" type="submit" name="button-reg">
                                <h2>Зарегистрироваться</h2>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>