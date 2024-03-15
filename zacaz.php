<?php
include 'template/head.php';
session_start();
include 'template/database.php';
include 'template/nav1.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: brown;width:1140px; margin-left:62px">
      <div class="container-fluid">
      
       
  </li>
  <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
   <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">ГЛАВНАЯ</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="technologist.php">НАША ПРОДУКЦИЯ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="manager.php">НАШ ДИРЕКТОР</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="axpedit.php">ДОСТАВКА</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="stockman.php">НАШИ СОТРУДНИКИ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Acs">АКЦИИ И СПЕЦ ПРЕДЛОЖЕНИЯ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Con">КОНТАКТЫ</a>
        </li>
       
      </ul>
    </div>
  </nav>
  <?php
if (!empty($_POST)){

//$id_zacaz=$_SESSION["id_zacaz"];
//$id_product=$_POST["id_product"];
 $fio=$_POST['fio'];
 $name=$_POST['name'];
 $quanity=$_POST['quanity'];
 $price=$_POST['price'];
 $adress=$_POST['adress'];
 $telephone=$_POST['telephone'];
$status=$_POST['status'];
  $sql = "insert into zacazclient (fio, name, quanity, price, adress, telephone, status) VALUES ('$fio', '$name', '$quanity', '$price', '$adress', '$telephone','$status')";
  $result = $mysqli->query($sql);
}
 ?>

 <h1 style="color:red; text-align:center"> Мои заказы</h1>       
                  <div class="container"style='width: 1600px;height: 600px;'>
        <div class="row">         
    <form action='zacaz.php'method='POST'>
<div class="form-element">
<label style="color:red"> Введите ФИО</label>
<input type="text" name="name" required /><br><br>
<label style="color:red">Название</label>
<input type="text" name="name" required /><br><br>
<label style="color:red">Количество</label>
<input type="integer" name="quanity" required /><br><br>
<label style="color:red">Цена</label>
<input type="integer" name="price" required /><br><br>
<label style="color:red">Адрес</label>
<input type="text" name="adress" required /><br><br>
</div> <br><br>
<div class="form-element">
  <label style="color:red"> Телефон</label>
  <input type="integer" name="telephone" required /><br><br>
</div> <br><br>
<label style="color:red"> Статус</label>
  <input type="integer" name="status" required /><br><br>
</div> <br><br>
<input type="submit" name="" value="Оплатить">
</form>
</div>
<!--?php

if (!empty($_POST)){
  if   ($_POST['status']==0){
    echo 'Заказ ожидает оплаты';
  }
 }
{
 if   ($_POST['status']==1){
  echo 'Спасибо за покупку!'; }
}

           
$mysqli->close();
<?php

           include 'template/footer.php';
           ?>       