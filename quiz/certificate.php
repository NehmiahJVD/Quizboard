<?php
namespace Dompdf;
require_once 'dompdf/autoload.inc.php';

if(isset($_POST['submit_val']))
{
$dompdf = new Dompdf(); 
$dompdf->loadHtml('

<center>

<div style="margin-left: 80px; width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #3D266C;">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #4E2E81;">
       <h1 style="font-size:42px; font-weight:bold; margin-top: 30px; color: #4E2E81;">CONGRATULATIONS</h1>
       <hr style="width: 20%; color: #4E2E81;">
       <br><br>
       <span style="font-size:22px">This is to certify that</span>
       <br><br>
       <span style="font-size:30px; color: #4E2E81;"><b>'.$_POST['name'].'</b></span><br/><br/>
       <span style="font-size:22px">has completed the our <br> programming and coding quiz<br>through our website</span><br/><br/>
       <span style="font-size:22px">and scored</span><br/><br/>
       <span style="font-size:30px; color: #4E2E81;"><b>'.$_POST['score'].'</b></span><br/><br/><br/><br/>
       <hr style="width: 10%; color: #4E2E81;">
       <p style="font-size:20px; margin-top: 0px; font-family: Verdana;">TEAM QUIZBOARD</p>
</div>
</div>
</center>
');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("",array("Attachment" => false));
exit(0);
}
?>