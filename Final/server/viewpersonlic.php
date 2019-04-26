
<?php
// require the file of db connection first
require 'db_connection.php';
// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


$national_id=$_GET["nationalid"];


$sql = "SELECT firstname,secondname,thirdname,fourthname,address,nationality,traffic_location,license_number,release_date,end_date
		FROM person,personal_license
    WHERE person.national_id=personal_license.national_id
    AND person.national_id=$national_id";

    $query = mysqli_query($conn,$sql);

    if($conn->query($sql) == TRUE){
    //mysqli_fetch_array-> this php built in function to retrive around all the return of sql query
    while ($row = mysqli_fetch_array($query))
    {
        $firstname= $row["firstname"];
        $secondname=$row["secondname"];
        $thirdname=$row["thirdname"];
        $fourthname=$row["fourthname"];
        $address=$row["address"];
        $nationality=$row["nationality"];
        $traffic_location=$row["traffic_location"];
        $license_number=$row["license_number"];
        $release_date=$row["release_date"];
        $end_date=$row["end_date"];
        
    }
}else{
  /*echo '<script type="text/javascript">
 alert("الرقم القومى خاطىء");
  location="../index.html";
  </script>';
*/
 echo "Error: " . $sql . "<br>" . $conn->error;

}

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language dependent data:
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'rtl';
$lg['a_meta_language'] = 'fa';
$lg['w_page'] = 'page';

// set some language-dependent strings (optional)
$pdf->setLanguageArray($lg);

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 12);

// add a page
$pdf->AddPage();

//output
$pdf->WriteHTML($traffic_location, true, 0, true, 0);
$pdf->Ln();
$pdf->WriteHTML('الاسم: '.$firstname.' '.$secondname.' '.$thirdname.' '.$fourthname, true, 0, true, 0);
$pdf->Ln();
$pdf->WriteHTML('الجنسية: '.$nationality, true, 0, true, 0);
$pdf->Ln();
$pdf->WriteHTML('العنوان: '.$address, true, 0, true, 0);
$pdf->Ln();
$pdf->Ln();
$pdf->WriteHTML('رقم الرخصه: '.$license_number, true, 0, true, 0);
$pdf->Ln();
$pdf->WriteHTML('تبدا فى: '.$release_date, true, 0, true, 0);
$pdf->Ln();
$pdf->WriteHTML('تنتهي فى: '.$end_date, true, 0, true, 0);
$pdf->Ln();




ob_end_clean();
//Close and output PDF document
$pdf->Output('personallicense.pdf', 'I');
?>
