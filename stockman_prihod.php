<?php
include "template/head.php";
include "template/nav.php";
?>
<form action="stockman_prihod.php" method="post">
    <input type="number" placeholder="Закуплено муки (кг)" value="prihodflour"><br>
    <input type="number" placeholder="Закуплено соли (кг)" value="prihodsalt"><br>
    <input type="number" placeholder="Закуплено дрожжей (кг)" value="prihodyeast"><br>
    <input type="number" placeholder="Закуплено сахара (кг)" value="prihodsugar"><br>
    <input type="date" placeholder="Введите дату отчёта" value="datarashod"><br>
    <button type="submit">Внести данные в базу</button><br><br>
</form>
<?php
include "template/footer.php";
?>