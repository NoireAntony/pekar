<?php
include 'template/head.php';
session_start();
include 'template/database.php';
include 'template/nav1.php';

    //Если массив POST непустой, то добавить запись в базу  
    if (!empty($_POST)) 
{
//В переменные запишем данные, полученные с формы

$name=$_POST['name'];
$pin=$_POST['pin'];
$address=$_POST['address'];
$nameproduct=$_POST['nameproduct'];
$quanity=$_POST['quanity'];



$sql="insert into waylist(name, pin, address, nameproduct, quanity) VALUES ('$name','$pin','$address','$nameproduct','$quanity')";
$result= $mysqli->query($sql);

}


?>


  
  <div class="zag"style="text-align:center;padding-top:30px;">
  <h1 style="color:red"> Страница экспедитора </h1><br>
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
<label>Наименование заказчика</label><br>
<input type="text" name="name" var="" required /> 
</div> <br><br>
<div class="form-element">
<label for="pin">ИНН заказчика</label><br>
<input type="interger"name="pin"required />
</div> <br><br>
<div class="form-element">
<label>Aдрес</label><br>
<input type="text" name="address" required />
</div> <br><br>
<div class="form-element">
<label>Наименование продукции</label><br>
<input type="text" name="nameproduct" required />
</div> <br><br>
<div class="form-element">
<label>Количество</label><br>
<input type="quanity" name="quanity" required />
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