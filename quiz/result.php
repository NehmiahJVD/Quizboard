<!-- ///////////////// USER SESSION PAGE CODE SESSION SET BY MOBILE NO////////////////////// -->

<?php

//START SESSION WHEN THE ADMIN LOGS IN
session_start();      

/////////LOGOUT BLOCK
if(isset($_POST['submitLogout']))   //WHEN LOGOUT IS PRESSED
{
	unset($_SESSION['pin']);    //REMOVE PHONE NUMBER SO THAT SESSION ENDS
	header("Location: ../quiz.php");     //TAKE BACK TO "QUIZ.PHP" PAGE FOR SIGN IN
	exit;
}

//////////PAGE ACCESS BLOCK
if (!isset($_SESSION['pin']))         //ACESS PAGE ONLY WHEN USER NUMBER MATCHES
{
	header("Location: ../quiz.php");
	exit;
}

?>


<!-- ///////////////// RESULT CALCULATE CODE SESSION SET BY SESSION////////////////////// -->



<?php
require_once("../result/result_model.php");   ///RESULT MODEL FILE

$answers = $_SESSION["answers"];              
$marks_obtained = NULL;
foreach($answers as $answer) {
    if($answer == 1){
        $marks_obtained += 1;
    }
}

//////SAVE RESULTS BLOCK
if(isset($_POST["saveResultBtn"]))            ///WHEN SAVE BUTTON PRESSED
{
    $resultObj = new Result();                ///OBJECT OF RESULT CLASS
    $pin = $_SESSION["pin"];
    $resultObj->add_result($marks_obtained, $pin);        ///ADD RESULT FUNCTION OF CLASS RESULT
}
?>





<!DOCTYPE HTML>
<html>
	<head>

	    <title>QuizBoard</title>
	    <meta charset="utf-8">
      <meta name="description" content="Quiz Board is a website for learing to code and provides a unique assessment through quiz regarding programming">
      <meta name="keywords" content="assessment, competition, scoreboarding, quiz board, quiz, programming, coding quiz, modern UI, UI, gradients ">
      <meta name="author" content="Zonaira Sajid and Khadija Faiz">
        
      <link rel="shortcut icon" type="image/png" href="../images/favi.png"/>
      <link href="../fonts/material-icons.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald|Poppins|Roboto|Roboto+Condensed" rel="stylesheet">   
	    <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/leaderboard.css">
      <link rel="stylesheet" href="../css/style.css">
      

	</head>
	<body>



<!-- ///////////////// NAVBAR ////////////////////// -->


<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" style="opacity: 0.85; " id="nav">
      <div class="container-fluid text-center align-items-center">
        <a class="navbar-brand ml-5 text-center" href="#" style="font-family: 'Oswald', sans-serif;">
          <i class="material-icons" style="color: #5B3582;">bubble_chart</i>
          QUIZ BOARD USER PANEL
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <form method="post" action="#">
                <input type="submit" class="btn btnDownload text-center" style="width: 100%;" name="submitLogout" value="Logout">
              </form>
            </ul>
      </div>
    </nav>
      


<!-- ///////////////// SCORECARD ////////////////////// -->



  <div class="container" style="margin-bottom: 10%;" id="content">
    <h1 class="font-weight-light text-center" style="color: gray; padding-top: 10%;">Score Card</h1>
    <h4 class=" font-weight-light my-4 text-center">Scores and assessments!</h1>
    <hr class="mt-2 msb-5" style="width: 20%;">
    <br>
    <h1 style="font-family: 'Roboto Condensed', sans-serif;" class="text-center mb-4">You got <?php echo $marks_obtained*10 ;?>% marks</h1>
    
<!--//////////SAVE SCORES///////-->

    <form action="#" method="post" class="text-center" style="font-family: 'Roboto Condensed', sans-serif;">
      <center>
        <button class="btn btnDownload" type="submit" name="saveResultBtn">Save Scores</button>    
      </center>
    </form>

<!--//////////VIEW SCORES///////-->

    <center>
      <a class="btn btnDownload mt-4" href="../result/view_results.php">View All Results</a>
      <div id="editor"></div>
    </center>

<!--//////////GET PDF///////-->

    <form action="certificate.php" method="post" class="text-center mt-5" style="font-family: 'Roboto Condensed', sans-serif;">
      <center>      
      <input  style="width: 20%;"  class="text-center form-control shadow" type="text" name="name" placeholder="Enter name to get pdf">
      <input type="text" name="score" hidden value="<?php echo $marks_obtained*10 ;?>% Marks">
      <br>  
        <button type="submit" name="submit_val" class="btn btnDownload" id="cmd">Get Certificate</button>
      </center>
    </form>
  </div>





<!-- ///////////////// FOOTER ////////////////////// -->

  
    <footer class="footer text-center" style="height:auto;">
        <img src="../images/code3.png" class="img-fluid" height="100" width="100" >
        <hr style="background-color: gainsboro; width: 20%;">
        <p class="text-center">User Panel Copyright @2019 | QUIZBOARD FYP</p>
    </footer>
  





    <script src="../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
 

    </body>
</html>

