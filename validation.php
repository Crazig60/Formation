<?php
$adresse = "silverheart974@msn.com";
$TO = $adresse;
$head = "From: ".$adresse."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=iso-8859-1\n";
$sujet = "Formulaire formation DREAMWEAVER CC";
$informations = "
Civilité: ".$_POST['Civilite']." \r\n
Nom: ".$_POST['Nom']." \r\n
Prenom: ".$_POST['Prenom']." \r\n
Sport: ".$_POST['sport']." \r\n
Niveau: ".$_POST['niveau-sport']."\r\n
Email du formulaire: ".$_POST['email']." \r\n
Message: ".$_POST['Message']." \r\n
";

$res = mail($TO ,$sujet ,$informations, $head);

Header("Location: https://cnfdi-cours.herokuapp.com/index.html" );
?>
