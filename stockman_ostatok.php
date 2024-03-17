<?php
$mysqli=new mysqli ("localhost", "root", "","pekarnya");
include "template/head.php";
include "template/nav.php";
?>
<form action="stockman_ostatok.php" method="post">
    <input type="number" placeholder="" name="flour"><br>
    <input type="number" placeholder="" name="salt"><br>
    <input type="number" placeholder="" name="yeast"><br>
    <input type="number" placeholder="" name="sugar"><br>
    <button type="submit">Внести данные в базу</button><br><br>
</form>
<?php

include "template/footer.php";
?>