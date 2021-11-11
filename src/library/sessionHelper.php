<?php

function checkSession() {
  session_start();
  if(!isset($_SESSION["username"])) {
    header("location: ../../index.php");
  }
}

function authUser()
{
  session_start();
$userName = $_POST["username"];
$passWord = $_POST["password"];

$_SESSION["username"]= $userName;
$_SESSION["password"] = $passWord;

$string = file_get_contents("../../resources/users.json");
$json = json_decode($string,true);

$userNameDb = $json["users"][0]["name"];
$passWordDb = $json["users"][0]["password"];

if($userName === $userNameDb && $passWord === $passWordDb )
{
header("location: ../dashboard.php");
} else {
  header("location: ../../index.php");
}
}
?>