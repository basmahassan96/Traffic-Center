<!DOCTYPE html>



<?php
// require the file of db connection first
require 'db_connection.php';
// very important notes
//1- the php get the value of html by the (name)o of field not id or any thing else


$license_number=$_GET["license_number"];

    
$sql = "SELECT sum(price) as total
		FROM pl_violations
    WHERE PL_id=$license_number";

$query = mysqli_query($conn,$sql);

if($conn->query($sql) == TRUE)
    {
       while ($row = mysqli_fetch_array($query))
       {
            $total= $row["total"];
       }
 
     }
    
  else{
    echo '<script type="text/javascript">
    alert("رقم الرخصة خاطىء");
    location="../index.html";
    </script>';
  }

 ?>


  <html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <link rel="shortcut icon" type="image/x-icon" href="../fav.png" />
      <title>الهيئه العامه للمرور</title>
          <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">
          <link rel="stylesheet" href="../styles.css">
  </head>
  <body>
    <!-- The nav bar. -->

    <nav class="navbar navbar-expand-sm navbar-light">
      <a class="navbar-brand" href="#"><img src="../logo.png" height="50" width="50"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.html"> الرئيسيه</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  خدمات الرخصه الشخصيه
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href=" ../personalLic.html">استخراج رخصه</a>
              <a class="dropdown-item" href="../personalLicRenew.html">تجديد رخصه</a>
                <a class="dropdown-item" href="../personalLicViolations.html">استعلام عن المخلفات</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  خدمات رخصه المركبات
         </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item active" href="../carLic.html">استخراج رخصه</a>
              <a class="dropdown-item" href="../carLicRenew.html">تجديد رخصه</a>
                <a class="dropdown-item" href="../carViolations.html">استعلام عن المخلفات</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../requests.html">متابعه الطلبات</a>
          </li>

        </ul>
      </div>
    </nav>
      <!-- jumbtron contain logo and introduction. -->

      <header class="jumbotron bg-primary">
        <div class="container align-self-left ">
          <div class="row row-header">
            <div class="col-12 col-sm-3">
                <img src="../logo.png" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 align-slef-center">
              <h1>خدمات نيابه المرور</h1>
              <p>مرحبا بك فى خدمه  نيابات المرور عبر بوابه الحكومه الالكترونيه</p>
                  </div>
            </div>
          </div>
      </header>

    <!--adress-->
    <div class="row row-content ">
          <div class="col-12 ml-auto adress">
              <h3>خدمه استعلام عن مخالفات الرخصه الشخصيه</h3>

          </div>
        </div>
            
  <!-- start of user input-->
              <div class="col-12 col-md-9">
                  <form  method="post">
                    <!--name-->
                      <div class="form-group row">
                          <label class="col-md-2 col-form-label">الاجمالى<span>:</span> </label>
                          <label class="col-md-2 col-form-label"> <?php echo"$total"; ?> جنيه </label> 
                         

                      </div>
                        
                                             
                 </form>
               </div>
               


<br>
<br>
<br>
<br>
  <!-- Footer -->
  <footer class="page-footer font-small ">
    <div class="footer-copyright text-center py-3">
      © كل الحقوق محفوظه لعبد الله و بسمه و بولا
    </div>

  </footer>
        <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>




            </body>



            </html>
