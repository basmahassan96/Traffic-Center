<?php


require 'db_connection.php';

$num=456;
$num2=13;

$sql="UPDATE car_information SET motor_volume = $num2 WHERE license_number = 25";


if ($conn->query($sql) === TRUE ){
  echo "done";
}






 ?>
