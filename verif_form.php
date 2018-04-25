<?php
$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$sexe = !empty($_POST['Sexe']) ? $_POST['Sexe'] : NULL;
$mail = $_POST['Email'];
$tel = $_POST['Tel'];
$message = $_POST['Message'];
$cgu = !empty($_POST['CGU']) ? $_POST['CGU'] : NULL;

if(isset($sexe) && isset($cgu) && $tel!="" && $nom!="" && $prenom!="" && $mail!="" && $message!=""){
    echo htmlentities($nom);
    echo htmlentities($prenom);
    echo htmlentities($sexe);
    echo htmlentities($mail);
    echo htmlentities($tel);
    echo htmlentities($message);
    echo htmlentities($cgu);
} else {
    return false;
}