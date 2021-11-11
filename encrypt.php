<?php
$passWord = "123456";
$hash = password_hash($passWord, PASSWORD_DEFAULT, ["cost"=>10]);
echo $hash;
echo "<br>";

 if(password_verify($passWord,$hash)) {
  echo "el password es correcto"."<br>";
 }