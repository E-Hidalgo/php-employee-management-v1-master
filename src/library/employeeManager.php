<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee(array $newEmployee)
{
 $employeesCollection = json_decode(file_get_contents("../../resources/employees.json"),true);
 $newEmployee["id"]= getNextIdentifier($employeesCollection);
 $newEmployee["age"]= intval($newEmployee["age"]);

 if(!isset($newEmployee["gender"])) {
   $newEmployee["gender"] = "";
 }

 if (!isset($newEmployee["lastName"])) {
   $newEmployee["lastName"]= "";
 }

 array_push($employeesCollection, $newEmployee);

 file_put_contents("../../resources/employees.json", json_encode($employeesCollection, JSON_PRETTY_PRINT));

 if(isset($_POST["lastName"])) {
   header("location: ../dashboard.php");
 } else {
   return $newEmployee["id"];
 }
}


function deleteEmployee(string $id)
{
// TODO implement it
}


function updateEmployee(array $updateEmployee)
{
// TODO implement it
}


function getEmployee(string $id)
{
// TODO implement it
}


function removeAvatar($id)
{
// TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
  $employeesCollection = json_decode(file_get_contents('../../resources/employees.json'), true); //convierte a varible de php (array)
  $lastId = [];
  for ($i = 0; $i < count($employeesCollection); $i++) {
  array_push($lastId, $employeesCollection[$i]['id']);
  }
  return max($lastId) + 1;
}