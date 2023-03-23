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
    <div class="flex-container">
        <?php include(INCLUDE_URL . "header.php") ?>
        <main>
        <section class="lk">
            <div class="container">
                <div class="lk-cont">
                    <div class="lk-title">
                        <h2>Личный кабинет</h2>
                    </div>
                </div>
                <div class="user">
                    <div class="user-image">
                    </div> 
                    <div class="user-data">
                        <form action="lk.php">
                            <fieldset class="names">
                                <legend>ФИО</legend>
                                <div class="inputs-reg">
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="second-name" value="<?=$_SESSION['second_name']?>"/>
                                    </div>
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="first-name" value="<?=$_SESSION['first_name']?>"/>
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
                            </div>
                           
                            <div class="submit">
                                <button class="btn" type="submit" name="button-reg">
                                    <h2>Сохранить</h2>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        </main>
        <footer>

        </footer>
    </div>
</body>

</html>