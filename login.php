<?php include("path.php") ?>
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
            <div class="login-cont">
                <div class="title">
                    <h1>Авторизация</h1>
                </div>
                <div class="form-container">
                    <form name="login" method="post" action="#">
                        <div class="inputs">
                            <div class="cont-inp">
                                <input class="inp" type="text" name="email" placeholder="Почта" />
                            </div>
                            <div class="cont-inp">
                                <input class="inp" type="password" name="password" placeholder="Пароль" />
                            </div>
                        </div>
                        <div class="addition">
                            <h3>Еще нет аккаунта? <a class="reg"
                                    href="<?php echo BASE_URL . "reg.php" ?>">Регистрация</a></h3>
                        </div>
                        <div class="submit">
                            <button class="btn" type="submit">
                                <h2>Войти</h2>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>