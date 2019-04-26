<!DOCTYPE html>

<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
</head>
<body>

<?php
// require the file of db connection first
require 'db_connection.php';
// veryimportant notes
//1- the php get the value of html by the (name)o of field not id or any thing else

////////// <---- GET THE INFORMATION OF employee----->////////////

//1-get the infromation of the employee
$firstname=$_GET["firstname"];
$secondname=$_GET["secondname"];
$thirdname=$_GET["thirdname"];
$fourthname=$_GET["fourthname"];
//2- get the employee's birthdate
$day=$_GET["day"];
$month=$_GET["month"];
$year=$_GET["year"];
$birthdate=$day."-".$month.'-'.$year;//add the 3 in one line
//echo $birthdate;
//3- get the --birthlocation--
$birthlocation=$_GET["birthlocation"];
//4-get the gender by check wich radio button the user choose
$gender;
if($_GET['radio']=="radio1"){
  $gender="ذكر";

}else if($_GET['radio']=="radio2"){
    $gender="انثى";

}
//5-get employee --Nationalid--
$nationalid=$_GET['nationalid'];
//6- get the employee --Mobile--
$mobile=$_GET['telnum'];
//7- get the employee --address--
$address=$_GET['address'];
//8- get employee --salary--
$salary=$_GET['salary'];
//9- get employee --job--
$job_title;
$jobtitle;
if($_GET['jobtitle']=="1"){
  $jobtitle ="ظابط مرور";
}else if($_GET['jobtitle']=="2"){
  $jobtitle="مهندس فحص";
}else if($_GET['jobtitle']=="3"){
    $jobtitle="موظف فى هيئه المرور";
}
//10-get employee --relegion--
$relegion;
if($_GET['relegion']=="1"){
  $relegion="مسلم";

}else if($_GET['relegion']=="2"){
    $relegion="مسيحى";

}





$sql = "INSERT INTO employee (salary, job_title,national_id)
VALUES ('$salary', '$jobtitle','$nationalid')";

$sql2 = "INSERT INTO person (national_id, firstname, secondname,thirdname,fourthname,address,birthdate,religion,gender,birth_place)
VALUES ('$nationalid', '$firstname', '$secondname','$thirdname','$fourthname','$address','$birthdate','$relegion','$gender','$birthlocation')";




if ($conn->query($sql2) === TRUE && $conn->query($sql) === TRUE) {
 header("Location: ../index.html");
 //echo"succed";
} else{
  echo "Error: " . $sql . "<br>" . $conn->error;
/*echo '<script type="text/javascript">
alert("احدى البيانات ناقصه ارجوك ملىء  جميع البيانات");
location="../manager.html";
</script>';
*/
/*
 header("Location: ../personalLic.html");
 echo "<script typetext/javascript'>alert(\"$error\");</script>";
*/

};






 ?>

 </body>
 </html>
