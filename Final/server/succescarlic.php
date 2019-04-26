<?php



$license_number = $_GET["license_number"];
 ?>
 <!DOCTYPE html>
 <html lang="ar" dir="rtl">
 <head>
   <meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 		<meta http-equiv="x-ua-compatible" content="ie=edge">
     <link rel="shortcut icon" type="image/x-icon" href="../fav.png" />
     <title>الهيئه العامه للمرور</title>

     <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
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
         <li class="nav-item active">
           <a class="nav-link" href="../index.html"> الرئيسيه</a>
         </li>

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 خدمات الرخصه الشخصيه
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" href=" ../askforcarlic_id.html">استخراج رخصه</a>
             <a class="dropdown-item" href="../personalLicRenew.html">تجديد رخصه</a>
               <a class="dropdown-item" href="../personalLicViolation.html">استعلام عن المخلفات</a>
           </div>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 خدمات رخصه المركبات
        </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" href="../askforpersonallic_id.html">استخراج رخصه</a>
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

   <!-- The pop up of employee entry. -->
   <div id="employeePanel" class="modal fade" role="dialog">
     <div class="modal-dialog modal-lg" role="content">
       <div class="modal-content">
         <div class="modal-header bg-primary">
           <button type="button" class="close ml-auto" id="close">
             &times;
           </button>
           <h4 class="modal-title ml-auto  ">برجاء ادخال رقمك القومى</h4>
         </div>
         <div class="modal-body">
           <form>
               <div class="form-group row">
                     <label for="firstname" class="col-md-2 col-form-label">الرقم القومى<span>:</span> </label>

                     <div class="col-md-6">
                         <input type="text" class="form-control" id="empid" name="fourthname" placeholder="الرقم القومى">
                     </div>
                 </div>
             <div class="col-12 col-sm-6 offset-2">
               <button type="submit" class="btn btn-secondary" onclick="checkid()">
                 دخول
               </button>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
   <!--adress-->
   <div class="row row-content ">
         <div class="col-12 ml-auto adress">

<h3>
   الطلب الخاص برخصه المركبه : <?php echo $license_number;?>
</h3>
<h2>يجب الحفاظ على هذا الرقم لاعطاءه لمهندس الفحص</h2>

   </div>
       </div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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


   <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
   <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
   <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="./idcheck.js"></script>


 <script>
 $(document).ready(function(){

 				 $("#employee").click(function(){
 					 $('#employeePanel').modal('show');
 });
 $("#close").click(function(){
 	$('#employeePanel').modal('hide');

 });
  });

 </script>

 </body>
 </html>
