<?php
$adresse = "VOTREADRESSE@orange.fr";
$TO = $adresse;
$head = "From: ".$adresse."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=iso-8859-1\n";
$sujet = "Formulaire formation DREAMWEAVER CC";
$informations = "
Civilité: ".$_POST['Civilité']." \r\n
Nom: ".$_POST['Nom']." \r\n
Prénom: ".$_POST['Prénom']." \r\n
Sport: ".$_POST['sport']." \r\n
Sport: ".$_POST['niveau-sport']."\r\n
Email du formulaire: ".$_POST['email']." \r\n
Message: ".$_POST['message']." \r\n
";
$res = mail($TO ,$sujet ,$informations, $head);

Header("Location: http://localhost/HTML/index.html");
?>
