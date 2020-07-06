
<h1 class="title">Авторизация</h1>
<form method="post" action="modules/loginS.php">
    <p>Ваш логин</p>
    <input type="text" name="login" value="<?= $_COOKIE['login']?>">
    <p>Ваш пароль</p>
    <input type="password" name="pass" value="<?= $_COOKIE['pass']?>"><br><br>
    <input type="submit" value="Войти">
</form>

