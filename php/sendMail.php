<?php

//send mail by contact.php
$firstname = htmlentities(trim($_POST["firstname"]));
$lastname = htmlentities(trim($_POST["lastname"]));

$to = "contact.lpst@mail.com";
$from = trim($_POST["emailContact"]);
$subject = htmlentities(trim($_POST["subject"]));
$message = htmlentities(trim($_POST["message"]));
$headers = array(
    "Reply-To" => $from,
    "X-Mailer" => "PHP/".phpversion()
);

if (isset($_POST["emailContact"], $_POST["message"], $_POST["subject"])){
    if(filter_var($from, FILTER_VALIDATE_EMAIL)){
        mail($to, $subject, $message, $headers, "-f ".$from);
        header('Location: ../pages/contact.php?s=0');
        echo "L'email est bonne !";
    }
    elseif (!filter_var($from, FILTER_VALIDATE_EMAIL)){
        echo "L'email n'est pas valide !";
        header('Location: ../pages/contact.php?e=0');
    }
}
else {
    header('Location: ../pages/contact.php?e=1');
}




