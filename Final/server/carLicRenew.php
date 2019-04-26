<!DOCTYPE html>

<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
</head>
<body>

<?php
// require the file of db connection first
require 'db_connection.php';


$national_id=$_GET["nationalid"];
$sql = "SELECT license_number
		FROM car_license
    WHERE national_id=$national_id";

$query = mysqli_query($conn,$sql);

if($conn->query($sql) == TRUE){
  $sql2 = "SELECT end_date
  		FROM car_license
      WHERE national_id=$national_id";

      $query2 = mysqli_query($conn,$sql2);

      if($conn->query($sql2) == TRUE){

        while ($row = mysqli_fetch_array($query2))
            {

      $enddate= $row["end_date"];
      $currentdate=date("Y-m-d");

      if($currentdate>$enddate){

        $num = intval(strtok($currentdate, '-')) ;
         $enddate=$num+3;
         $enddate=$enddate.'-'.date("m").('-').date("d");
         
    $sql3 = "UPDATE car_license
     SET end_date=$enddate
     WHERE national_id=$national_id";

       $query3 = mysqli_query($conn,$sql3);
       echo '<script type="text/javascript">
       alert("تم تجديد الرخصه");
       location="../carLicRenew.html";
       </script>';
     }else{
       echo '<script type="text/javascript">
       alert("لم يحين موعد تجديد الرخصه");
       location="../carLicRenew.html";
       </script>';
     }

      }

}}else{
  echo '<script type="text/javascript">
  alert("خطا فى رقم الرخصه كرر المحاوله");
  location="../carLicRenew.html";
  </script>';
}

 ?>

 </body>
 </html>
