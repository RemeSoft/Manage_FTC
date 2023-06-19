<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Authentication</title>
</head>
<body>
    <main class="auth">
        <img class="auto__brand" src="./img/logo/logo.png" alt="">
        <form class="auth__form" method="post" action="/controller/AdminLogin.php">
            <div class="input">
                <input class="input__box" type="text" name="username" placeholder="Enter you username">
            </div>
            <div class="input">
                <input class="input__box" type="password" name="password" placeholder="Enter you password">
                <button class="input__visibility" type="button"><img src="./img/icon/eye__open.png"></button>
            </div>
            <input class="form__submit" name="submit" type="submit" value="Submit">
        </form>

        <form class="right:top__input" method="POST" enctype="multipart/form-data">
            <input class="forget" name="forget" type="submit" value="Forget your password">
        </form>
    </main>
</body>
</html>

