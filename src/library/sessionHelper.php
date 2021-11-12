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

  // echo $userName;
  // echo $passWord;
 
// GETTING DATA FROM JSON

  $string = file_get_contents("../../resources/users.json");
  $json = json_decode($string,true);
  $users = $json["users"];
  //  var_dump($users);

// TO CHECK IF USER IS IN DATABASE
include_once("loginManager.php");
  foreach ($users as $user) {
    if($user["name"] === $userName) {
      //User Registered"

      if(password_verify($passWord, $user["password"])) {
        //All ok log in
        session_start();
        $_SESSION["username"] = $userName;
        echo "Login Ok";
      } else {
        echo "Invalid Password";
      }
    }else {
      echo "User not found";
    }
    // var_dump($user);
}





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