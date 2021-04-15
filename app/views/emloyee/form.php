<?php
include ('../../models/employee.php');
// echo realpath("../");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empleados</title>
</head>
<body>
  <form action="../../controller/employee.php" method="post">
    <h3>Nombre</h3>
    <input type="text" name="name" id="">
    <h3>last_name</h3>
    <input type="text" name="last_name" id="">
    <h3>identification</h3>
    <input type="number" name="identification" id="">
    <h3>direction</h3>
    <input type="tel" name="direction" id="">
    <h3>phone</h3>
    <input type="tel" name="phone" id="">
    <h3>city_birth_id</h3>
    <input type="number" name="city_birth_id" id="">
    <h3>position_id</h3>
    <input type="number" name="position_id" id="">
    <h3>country_birth_id</h3>
    <input type="number" name="country_birth_id" id="">
    <input type="submit" value="enviar">
  </form>
</body>
</html>