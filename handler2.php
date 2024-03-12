<?php
include 'template/head.php';

session_start();




//include 'template/database.php';
include 'template/nav1.php';

    //Если массив POST непустой, то добавить запись в базу  
    if (!empty($_POST)) 
{
//В переменные запишем данные, полученные с формы

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];
$telephone=$_POST['telephone'];
$role=$_POST['role'];
$_SESSION['role']=$role;
if (!empty($_SESSION)){

 if   ($_SESSION['role']==0){
    header ('location:main.php'); 
 }
 elseif($_SESSION['role']==1){
  header ('location:zacaz.php'); 
 }
}
$sql="insert into `users`(`name`,`email`,`address`,`telephone`,`password`,`role`) values ( '$name','$email','$address','$telephone','$password','$role')";
$result= $mysqli->query($sql);

}


?>
 
<main>
    <h1>Регистрация</h1>
    <form action='handler2.php'method='POST'>
<div class="form-element">
<label>Username</label>
<input type="text" name="name" var="" required /> 
</div> <br><br>
<div class="form-element">
<label>Email</label>
<input type="email" name="email" required />
</div> <br><br>
<div class="form-element">
<label>Address</label>
<input type="text" name="Address" required />
</div> <br><br>
<div class="form-element">
<label>telephone</label>
<input type="number" name="telephone" required />
</div> <br><br>
<div class="form-element">
<label>role</label>
<input type="role" name="role" required />
</div> <br><br>
<div class="form-element">
<label>Пароль</label>
<input type="password" name="password" required />
</div> <br><br>
<div class="form-element">
<label>Подвердить пароль</label>
<input type="password" name="password" required />
</div> <br><br>
<div class="form-element">
<INPUT type="submit" value=" Регистрация" style='width: 200px; height: 30px; margin-left: 20px ; border-color:black ;  border-radius: 5px;margin:5px;font-family:  Gothic Medium ;font-size: 20px; color:black; background-color:white; align-items: center;'  >
</div>
</form> 
           </div>
           </div>
           </main>
           <?php
           
$mysqli->close();

?>

            <?php
        
           include 'template/footer.php';
           ?>       