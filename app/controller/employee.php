<?php
include_once ( __DIR__ . '\..\models\employee.php');

$s = new Employee();
$s -> insert_employee([
  'name' => $_POST['name'],
  'last_name' => $_POST['last_name'],
  'identification' => $_POST['identification'],
  'direction' => $_POST['direction'],
  'phone' => $_POST['phone'],
  'city_birth_id' => $_POST['city_birth_id'],
  'position_id' => $_POST['position_id'],
  'country_birth_id' => $_POST['country_birth_id']
]);
// echo realpath("");
// echo __DIR__;
// echo dirname(__FILE__);
echo $s -> count();
?>