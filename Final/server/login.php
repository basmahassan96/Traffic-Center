<?php
// require the file of db connection first
require 'db_connection.php';
// very important notes
//1- the php get the value of html by the (name)o of field not id or any thing else


$national_id=$_GET["nationalid"];

$sql = "SELECT job_title
		FROM employee
    WHERE national_id=$national_id";

$query = mysqli_query($conn,$sql);

if($conn->query($sql) == TRUE){


    while ($row = mysqli_fetch_array($query))
    		{

  $jobtitle= $row["job_title"];

  if($jobtitle=="ظابط مرور"){
    header("Location: ../officer/index.html");

  }else if($jobtitle=="مهندس فحص"){
    header("Location: ../engineer/index.html");

  }else if($jobtitle=="موظف فى هيئه المرور"){
    header("Location: ../employee/index.html");

  }


}
}
?>
