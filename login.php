<?php
include "template/head.php";
include "template/nav.php";
?>
<form action="login.php" method="post">
    <input type="text" placeholder="Введите логин" name="login"><br>
    <input type="password" placeholder="Введите пароль" name="password"><br>
    <button type="submit">Войти</button><br><br>
</form>

<?php //by Ivan Kanunnikov
    if (!empty($_POST['login']) and !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $link = new mysqli("localhost", "root", "", "pekarnya") or die(mysqli_error($link));
        $sql = "select * from user where login='$login' AND password='$password'";
        $result = $link->query($sql);
        $row = mysqli_fetch_assoc($result);
        $id_user=$row['id_user'];
        $role=$row['id_role'];
        if ($id_user) {
            session_start();
            $_SESSION['id_user'] = $id_user;
            $_SESSION['id_role'] = $role;
            header("Location: index.php");
        }
        else {
            $message = 'Логин или пароль введены неверно, пожалуйста повторите попытку';
        } 
    }
?>
<?php
include "template/footer.php";
?>