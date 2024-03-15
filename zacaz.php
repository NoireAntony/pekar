<?php
include 'template/head.php';
session_start();
include 'template/database.php';
include 'template/nav1.php';
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

 <h1 style="color:red"> Мои заказы</h1>       
                  <div class="container"style='width: 1600px;height: 600px;'>
        <div class="row">         
    <form action='zacaz.php'method='POST'>
<div class="form-element">
<label> Введите ФИО</label>
<input type="text" name="name" required /><br><br>
<label>Название</label>
<input type="text" name="name" required /><br><br>
<label>Количество</label>
<input type="integer" name="quanity" required /><br><br>
<label>Цена</label>
<input type="integer" name="price" required /><br><br>
<label>Адрес</label>
<input type="text" name="adress" required /><br><br>
</div> <br><br>
<div class="form-element">
  <label> Телефон</label>
  <input type="integer" name="telephone" required /><br><br>
</div> <br><br>
<label> Статус</label>
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


           include 'template/footer.php';
           ?>       