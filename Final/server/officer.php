<?php
// require the file of db connection first
require 'db_connection.php';
// veryimportant notes
//1- the php get the value of html by the (name)o of field not id or any thing else

////////// <---- GET THE INFORMATION OF Violation from officer----->////////////

//1-get the infromation of the officer
$PLicenseID=$_GET["personalLic"];
$CLicenseID=$_GET["carlic"];

$VPlace=$_GET["violationplace"];
$date=date("Y-m-d");

$Ltaken;

if($_GET['taken']=="yes"){
  $Ltaken=1;
}
else if ($_GET['taken']=="no"){
  $Ltaken=0;
}

$violationtype;
$price;
if($_GET['violation']=="1"){
  $violationtype ="عدم ربط الحزام";
  $price="100 جنيها";
}else if($_GET['violation']=="2"){
  $price="400 جنيها";
  $violationtype="ركن صف تانى";
}
$sql;
if($PLicenseID==""){

  $sql = "INSERT INTO cl_violation (VType,VPlace,VDate,license_taken,price,CL_id)
  VALUES ('$violationtype','$VPlace','$date','$Ltaken','$price','$CLicenseID' )";

}else if($CLicenseID==""){
$sql = "INSERT INTO pl_violations (VType,VPlace,VDate,license_taken,price,PL_id)
VALUES ('$violationtype','$VPlace','$date','$Ltaken','$price','$PLicenseID' )";
}


if ($conn->query($sql) === TRUE ) {

  echo '<script type="text/javascript">
  alert("تم تسجيل المخالفه بنجاح");
  location="../index.html";
  </script>';

} else{
  echo "Error: " . $sql . "<br>" . $conn->error;
/*echo '<script type="text/javascript">
alert("تاكد من رقم الرخصه الذى قمت بادخاله");
location="../personalLic.html";
</script>';
*/

};






 ?>
