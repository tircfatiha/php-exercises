<?php
session_start();
$_SESSION["user"] = "Ali";

setcookie("email", "ali@mail.com", time()+604800);

echo $_SESSION["user"];
?>
