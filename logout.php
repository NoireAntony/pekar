<?php
include "template/head.php";
include "template/nav.php";
?>
<?php //by Ivan Kanunnikov
    session_start();
    unset($_SESSION["id_user"]);
    unset($_SESSION["login"]);
    unset($_SESSION["id_role"]);
    header("location: index.php");
?>
<?php
include "template/footer.php";
?>