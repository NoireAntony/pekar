<?php
include 'template/head.php';
session_start();
//include 'template/database.php';
include 'template/nav1.php';
if (!empty($_POST)) {

//if (!empty($_POST['password'])  and !empty($_POST['email'])){

    $password=$_POST['password'];
    $login=$_POST['login'];
    $role=$_POST['role'];
    $_SESSION['role']=$role;
    
$sql="SELECT * FROM `users` WHERE `password`='$password' AND `email`='$email'";
$result=$mysqli->query($sql);

if($result->num_rows === 0) {
    $message = "Пользователь неверно ввел логин или пароль";
    echo $message;
    exit(); 
}
if (!empty($_SESSION)){

    if   ($_SESSION['role']==0){
       header ('location:main.php'); 
    }
    elseif($_SESSION['role']==1){
       header ('location:zacaz.php'); 
    }
    elseif($_SESSION['role']==2){
        header ('location:zacaz.php'); 
   }
   elseif($_SESSION['role']==3){
    header ('location:zacaz.php'); 
   }
   elseif($_SESSION['role']==4){
    header ('location:axpedit.php');  
}
}
foreach($result as $row)
//if (!empty($user[0]))
{ 
    session_start();
 $_SESSION["id_user"]=$user["id_user"];

 $_SESSION["password"]=$user["password"]; 
// $_SESSION["login"]=$user["login"]; 
 $_SESSION["role"]=$user["role"]; 
echo "Пользователь прошел авторизацию";



}


}





?>
<header>
    <div class="container-fluid">
<h2>Авторизация </h2>  





<br><br>
<form method="post" action="zacaz.php">


<div class="form-element">
<label>Логин</label>
<input type="login" name="login" required />
</div> <br><br>
<div class="form-element">
<label>Пароль</label>
<input type="password" name="password" required />
</div> <br><br>
<label>Роль</label>
<input type="number" name="role" required />
</div> <br><br>
<div class="form-element">
<input type="submit" value="Войти">
</div>

<p>
<?php
        echo $message;
        ?>
        </p>

</form>
</div>
</div>
</main>  



</header>
<?php
include 'template/footer.php';
?>