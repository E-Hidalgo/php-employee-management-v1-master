<?php

session_start();
$userName = $_POST["username"];
$passWord = $_POST["password"];

$_SESSION["username"]= $userName;
$_SESSION["password"] = $passWord;

echo "This is your username: ". $_SESSION["username"]. "<br>";
echo "This is your password: " . $_SESSION["password"];
?>