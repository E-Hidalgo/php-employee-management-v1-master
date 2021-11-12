<?php

// IF THERE IS NO SESSION, REDIRECT TO LOGIN PAGE
function checkSession() {
  session_start();
  if(!isset($_SESSION["username"])) {
    header("location: ../../index.php");
  }
}

// TO CATCH THE DATA FROM LOGIN 
function authUser()
{
  $userName = $_POST["username"];
  $passWord = $_POST["password"];

  echo $userName;
  echo $passWord;
  checkUser();
}

// TO CHECK IF USER IS IN DATABASE
function checkUser() {
// GETTING DATA FROM JSON
  $string = file_get_contents("../../resources/users.json");
  $json = json_decode($string,true);
 
  var_dump($json);

  $userNameDb = $json["users"][0]["name"];
  $passWordDb = $json["users"][0]["password"];

  // if($userName === $userNameDb && $passWord===$passWordDb){
  //   session_start();
  //   $_SESSION["username"];
  //   $_SESSION["password"];
  // }
}


//TO DESTROY SESSION & COOKIE
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