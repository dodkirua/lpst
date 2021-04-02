<?php
session_start();
$title = "LPST : Supprimer le contenue";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
?>

<div class="forgotPassword">
    <h2 class="subtitle center">Supprimer le contenue</h2>
    <form  action="../php/addAddress.php" method="post" class="flexColumn flexCenter width_100">
        <h2>Etes vous sûr de vouloir supprimer "<?=$_SESSION['information'][$_GET['id']]['title']?>" ?</h2>
        <input type="submit" id="modifyInformation2" class="send modify modifyProfil width_100" value="Oui">
        <a href="local.php" class="redButton width_100 center">Non</a>
    </form>
</div>