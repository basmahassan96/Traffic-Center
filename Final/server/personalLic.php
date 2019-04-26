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

////////// <---- GET THE INFORMATION OF citizen----->////////////

//1-get the infromation of the citizen
$firstname=$_GET["firstname"];
$secondname=$_GET["secondname"];
$thirdname=$_GET["thirdname"];
$fourthname=$_GET["fourthname"];
//2- get the citizen birthdate
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
//5-get citizen --Nationalid--
$nationalid=$_GET['nationalid'];
//6- get the citizen --Mobile--
$mobile=$_GET['telnum'];
//7- get the citzien --address--
$address=$_GET['address'];
//8-get citizen --relegion--
$relegion;
if($_GET['relegion']=="1"){
  $relegion="مسلم";

}else if($_GET['relegion']=="2"){
    $relegion="مسيحى";

}
//9- get thd citzien idcard
$identfication;
if($_GET['idcard']=="1"){
  $identfication="مصرى";
}else if($_GET['idcard']=="2"){
  $identfication="اجنبى";
}
///10-get the trafiic location
$trafficlocation;
if($_GET['trafficlocation']=="1"){
  $trafficlocation="مرور البساتين";
}else if($_GET['trafficlocation']=="2"){
  $trafficlocation="مرور المعادى";
} else if($_GET['trafficlocation']=="3"){
  $trafficlocation="مرور المعادى";
}

///////////<----- make ready of personal licesne data----->////////////////////
//1-get the current date as start date of license
$startdate= date("Y-m-d");

//2-add 3 years to the current year to make it as endyear
$num = intval(strtok($startdate, '-')) ;
 $enddate=$num+3;
 $enddate=$enddate.'-'.date("m").('-').date("d");







//$file = addslashes(file_get_contents($_FILES["personalpicture"]));


$sql = "INSERT INTO person (national_id, firstname, secondname,thirdname,fourthname,address,birthdate,religion,gender,nationality,birth_place,traffic_location,phone_number)
VALUES ('$nationalid', '$firstname', '$secondname','$thirdname','$fourthname','$address','$birthdate','$relegion','$gender','$identfication','$birthlocation','$trafficlocation',$mobile)";


$sql3="INSERT INTO personal_license(release_date,end_date,national_id)
VALUES('$startdate','$enddate','$nationalid')";


if ($conn->query($sql) === TRUE  &&$conn->query($sql3) === TRUE) {
 header("Location: ../index.html");
 echo"succed";
} else{
  echo "Error: " . $sql . "<br>" . $conn->error;
echo '<script type="text/javascript">
alert("احدى البيانات ناقصه ارجوك ملىء  جميع البيانات");
location="../personalLic.html";
</script>';

/*
 header("Location: ../personalLic.html");
 echo "<script typetext/javascript'>alert(\"$error\");</script>";
*/

};






 ?>

 </body>
 </html>
