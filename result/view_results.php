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
        <a class="navbar-brand ml-5 text-center" href="./view_results.php" style="font-family: 'Oswald', sans-serif;">
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



  <?php

  require_once("../quiz/quiz_model.php");       //QUIZ MODEL FILE
  
  if(isset($_POST["startQuizBtn"]))             //IF QUIZ BUTTON IS PRESSED
  {
    $quizObject = new Quiz();                   //OBJECT OF QUIZ CLASS
    $mcq_ids = $quizObject->get_mcq_ids();      //GET MCQ ID FUNCTION TO GET IDS OF QUESTIONS AS ARRAY
    shuffle($mcq_ids);                          //SHUFFLE PHP FUNCTION TO RANDOM THE IDS ARRAY
    $min = 0;
    $max = (count($mcq_ids)-1)-10;
    $random_index = rand($min, $max);
    $mcq_ids = array_slice($mcq_ids, $random_index, 10);
    $mcq_ids = implode(",",$mcq_ids);
    $mcqs = $quizObject->get_mcqs($mcq_ids);
    shuffle($mcqs);

    $_SESSION["quiz"] = $mcqs;
    $_SESSION["current_mcq_no"] = 0; // array index starts from 0;
    header("location: ../quiz/quiz.php");
    exit;
  }

//////////GET RESULTS BLOCK///////////////

  require_once("result_model.php");       //RESULT MODEL FILE
  $resultObject = new Result();           //OBJECT OF RESULT CLASS
  $results = $resultObject->get_results_by_user($_SESSION["pin"]);    ///GET RESULTS FUNCTION THROUGH PHONE NUMBER

?>


  <div class="container" style="margin-bottom: 10%;">
    <h1 class="font-weight-light text-center" style="color: gray; padding-top: 10%;">User Panel</h1>
    <h4 class=" font-weight-light my-4 text-center">Quiz to take and stats to check!</h1>
    <hr class="mt-2 msb-5" style="width: 20%;">
    <br>
    
    <!--TAKE QUIZ BUTTON AND FORM TO START-->

    <form method="post" action="#" class="mb-5">
      <center>
        <button class="btn btnDownload" type="submit" name="startQuizBtn">Take Quiz</button>
      </center>
    </form>

    <h3 class=" font-weight-light my-4 text-center">Quiz scores for <?php echo $_SESSION["pin"]; ?></h3>    
    <hr class="mt-2 msb-5" style="width: 20%;">
    

    <!--SCORES TABLE FOR USER-->

    
    <table class="table mt-5" cellpadding='10px' align="center" width="50%"  style="box-shadow: 0 15px 12px rgba(0,0,0,0.22), 0 19px 38px rgba(0,0,0,0.33); border-color: grey; background-color: transparent; font-family: 'Roboto Condensed', sans-serif;">
      <tr style="background-color: #7C6CA0;">
        <th>Date Submitted</th>
        <th>Marks Obtained</th>
      </tr>

      <?php
    
      if(isset($results))
      {
        foreach($results as $result)
        {
        ?>
          <tr>
              <td><?php echo $result["date"]; ?></td>
              <td><?php echo $result["marks_obtained"]; ?></td>
          </tr>
        <?php 
        } // end foreach
      } // end if
      ?>

</table>
</div>





<!-- ///////////////// FOOTER ////////////////////// -->

  
    <footer class="footer text-center" style="height:auto;">
        <img src="../images/code3.png" class="img-fluid" height="100" width="100" >
        <hr style="background-color: gainsboro; width: 20%;">
        <p class="text-center">User Panel Copyright @2019 | QUIZBOARD FYP</p>
    </footer>
  





    <script src="../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
    </body>
</html>

