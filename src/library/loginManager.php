<?php

require_once("./sessionHelper.php");

// GET FROM LOGIN BY POST
$userName = $_POST["username"];
$passWord = $_POST["password"];
authUser();

?>