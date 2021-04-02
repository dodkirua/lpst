<?php
session_start();
$title = "LPST : Modifié le contenue";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
?>

<div class="forgotPassword">
    <h2 class="subtitle center">Modifier le contenue</h2>
    <form  action="../php/addAddress.php" method="post" class="flexColumn flexCenter width_100">
        <input type="hidden" value="1" name="delivery">
        <label for="title" class="colorBlue center margin15-30">Titre </label>
        <input id="title" name="title" class="whiteBorder width_100" type="text" value="<?=$_SESSION['information'][$_GET['id']]['title']?>">
        <label for="firstname" class="colorBlue center margin15-30">Description </label>
        <textarea id="firstname" name="firstname" class="whiteBorder width_100"><?=$_SESSION['information'][$_GET['id']]['description']?></textarea>
        <label for="lastname" class="colorBlue center margin15-30">Image</label>
        <input type="text" value="<?=$_SESSION['information'][$_GET['id']]['image']?>">
        <input id="lastname" name="lastname" class="whiteBorder width_100" type="file">

        <input type="submit" id="modifyInformation2" class="send modify modifyProfil" value="Enregistrer">
    </form>
</div>