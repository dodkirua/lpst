<?php
session_start();
if (isset($_FILES['fichierUtilisateur']) && $_FILES['fichierUtilisateur']['error'] === 0){

    $allowedMimeTypes = ['image/jpeg'];
    if (in_array($_FILES['fichierUtilisateur']['type'],$allowedMimeTypes)){

        $maxSize = 3 * 1024 * 1024; // 3mo
        //$maxSize = 30 *1024; // 30ko
        if (intval($_FILES['fichierUtilisateur']['size'] <= $maxSize)){

            $tmp_name = $_FILES['fichierUtilisateur']['tmp_name'];
            $name = $_FILES['fichierUtilisateur']['name'];
            $name = $_SESSION["user"]["id"] . $_FILES['fichierUtilisateur']['type'] ;
            move_uploaded_file($tmp_name,"upload/".$name);
        }
        else {
            header('Location: index.php?e=3');
        }
    }
    else {
        header('Location: index.php?e=2');
    }
}
else {
    header('Location: index.php?e=1');
}

