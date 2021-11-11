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

$hash = password_hash($passWord, PASSWORD_DEFAULT, ["cost"=>10]);


if($userName === $userNameDb && password_verify($passWord, $hash) === $passWordDb )
{
header("location: ../dashboard.php");
} else {
  header("location: ../../index.php");
}
}

function destroySession() {
  session_start();
unset($_SESSION);

if (ini_get("session.use_cookie")) {
  $params = session_get_cookie_params();
  setcookie(
  session_name(),
  '',
  time() - 42000,
  $params["path"],
  $params["domain"],
  $params["secure"],
  $params["httponly"],
  );
  }
  session_destroy();
  header("Location: ../../index.php?logout=true");
}
?>