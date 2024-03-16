<?php
$mysqli=new mysqli ("localhost", "root", "","pekarnya");
include "template/head.php";
include "template/nav.php";
?>
<form action="stockman_rashod.php" method="post">
    <a>Введите расход муки за месяц (кг)</a>
    <input type="number" placeholder="Расход муки за месяц (кг)" name="rashodflour"><br>
    <a>Введите расход соли за месяц (кг)</a>
    <input type="number" placeholder="Расход соли за месяц (кг)" name="rashodsalt"><br>
    <a>Введите расход дрожжей за месяц (кг)</a>
    <input type="number" placeholder="Расход дрожжей за месяц (кг)" name="rashodyeast"><br>
    <a>Введите расход сахара за месяц (кг)</a>
    <input type="number" placeholder="Расход сахара за месяц (кг)" name="rashodsugar"><br>
    <a>Введите дату отчёта</a>
    <input type="date" placeholder="Введите дату отчёта" name="datarashod"><br>
    <button type="submit">Внести данные в базу</button><br><br>
</form>
<?php
if (!empty($_POST['rashodflour']) and !empty($_POST['rashodsalt']) and !empty($_POST['rashodyeast']) and !empty($_POST['rashodsugar'])) {
    $flour = $_POST['rashodflour'];
    $salt = $_POST['rashodsalt'];
    $yeast = $_POST['rashodyeast'];
    $sugar = $_POST['rashodsugar'];
    $daterashod = $_POST['daterashod'];
    $link = new mysqli("localhost", "root", "", "samrabdva") or die(mysqli_error($link));
    $sql = "insert into kladovschik (data, rashod_muki, rashod_soli, rashod_drozh, rashod_sahara) values ('$daterashod', '$flour', '$salt', '$yeast', '$sugar')";
    $result = $link->query($sql);
    header("Location: login.php");
}
else {
    $message = 'Что-то пошло не так, пожалуйста повторите попытку';
}
include "template/footer.php";
?>