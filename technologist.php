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
    //Если массив POST непустой, то добавить запись в базу  
    if (!empty($_POST)) 
{
//В переменные запишем данные, полученные с формы

$nameproduct=$_POST['nameproduct'];
$quanitypr=$_POST['quanitypr'];
$materials=$_POST['materials'];
$quanitymat=$_POST['quanitymat'];





$sql="insert into resept(nameproduct, quanitypr, materials, quanitymat ) VALUES ('$nameproduct','$quanitypr','$materials','$quanitymat')";
$result= $mysqli->query($sql);

}


?>


  
  <div class="zag"style="text-align:center;padding-top:30px;">
  <h1 style="color:red"> Страница технолога </h1><br>
  </div>
  
              </div>
          </div>
      </div>
        </div>    
                </div>
            
              
                  <div class="container"style='width: 1600px;height: 600px;'>
        <div class="row">         
    



        


 
<main>
    
    <form action='axpedit.php'method='POST'>
<div class="form-element">
<label style="color:red">Наименование продукции</label><br>
<input type="text" name="nameproduct" var="" required /> 
</div> <br><br>
<div class="form-element">
<label style="color:red">Количество продукции <label><br><br></div>
<input type="interger"name="quanitypr"required />
</div> <br><br>
<div class="form-element">
<label style="color:red">Сырье</label><br>
<input type="text" name="materials" required />
</div> <br><br>

<div class="form-element">
<label style="color:red" >Количество сырья</label><br>
<input type="quanity" name="quanitymat" required />
</div> <br><br>

<div class="form-element">
<INPUT type="submit" value="Отправить" style='width: 200px; height: 30px; margin-left: 20px ; border-color:black ;  border-radius: 5px;margin:5px;font-family:  Gothic Medium ;font-size: 20px; color:black; background-color:white; align-items: center;'  >
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