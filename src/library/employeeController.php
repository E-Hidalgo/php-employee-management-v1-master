<?php
include_once "employeeManager.php";

$method = $_SERVER["REQUEST_METHOD"];
if(isset($_GET["form"])) {
  $method = "PUT";
}


if($method =="POST") {
  addEmployee($_REQUEST);
}

?>