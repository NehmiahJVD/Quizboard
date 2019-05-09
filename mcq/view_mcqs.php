<!-- ///////////////// ADMIN SESSION PAGE CODE SESSION SET BY MOBILE NO////////////////////// -->

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
if (!isset($_SESSION['pin']) || $_SESSION["role"] != "admin")     //ACESS PAGE ONLY WHEN ADMIN AND THE NUMBER MATCHES
{
	header("Location: ../quiz.php");       //IF DOESN'T MATCH TAKE BACK TO SIGN IN PAGE
	exit;
}

?>



<!-- ///////////////// GET AND DELETE MCQ CODE////////////////////// -->



<?php

require_once("mcq_model.php");      //MCQ MODEL FILE
$mcqObject = new MCQ();             //OBJECT OF CLASS "MCQ"

//////DELETE MCQ BLOCK
if(isset($_GET["mcqid"]))           //IF DELETE MCQ BTN PRESSED AGAINST ANY ID
{
    $mcqObject->delete_mcq();       //DELETE FUNCTION OF MCQ CLASS
}

//GET MCQS FUNCTION CALL TO DISPLAY THEM ALL
$mcqs = $mcqObject->get_mcqs();     //GET MCQ FUNCTION OF CLASS MCQ TO SELECT & DISPLAY ALL

?>




<!DOCTYPE HTML>
<html>
	<head>

	  <title>QuizBoard ControlPanel</title>
	  <meta charset="utf-8">
    <meta name="description" content="Quiz Board is a website for learing to code and provides a unique assessment through quiz regarding programming">
    <meta name="keywords" content="assessment, competition, scoreboarding, quiz board, quiz, programming, coding quiz, modern UI, UI, gradients ">
    <meta name="author" content="Zonaira Sajid and Khadija Faiz">
      
    <link rel="shortcut icon" type="image/png" href="../images/favi.png"/>
    <link href="../fonts/material-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Poppins|Roboto|Roboto+Condensed" rel="stylesheet">   
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/style.css">
    

	</head>
	<body>



<!-- ///////////////// NAVBAR ////////////////////// -->


      
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" style="opacity: 0.85; " id="nav">
      <div class="container-fluid text-center align-items-center">
        <a class="navbar-brand ml-5 text-center" href="../admin.php" style="font-family: 'Oswald', sans-serif;">
          <i class="material-icons" style="color: #5B3582;">bubble_chart</i>
          QUIZ BOARD ADMIN PANEL
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="./add_mcq.php" style="font-family: 'Roboto Condensed', sans-serif;">Add Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./view_mcqs.php" style="font-family: 'Roboto Condensed', sans-serif;">View Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../user/view_users.php" style="font-family: 'Roboto Condensed', sans-serif;">View Users</a>
              </li>
              <form method="post" action="#">
                <input type="submit" class="btn btnDownload text-center" style="width: 100%;" name="submitLogout" value="Logout">
              </form>
            </ul>
      </div>
    </nav>
      


<!-- ///////////////// MCQ TABLE ////////////////////// -->



  <div class="container" style="margin-top: 5%; text-center">
    <h1 class="font-weight-light text-center" style="color: gray; padding-top: 5%;">Quiz Catalogue</h1>
    <h4 class=" font-weight-light my-4 text-center">Questions list for quiz</h1>
    <hr class="mt-2 mb-5" style="width: 20%;">
    <div class="row mb-5">
    
    <!--//////////////TABLE FOR MCQ DISPLAY///////////-->

    <table cellpadding='10px' align="center" width="80%" style=" font-family: 'Roboto Condensed', sans-serif;"> 
      
      <?php

      if(isset($mcqs))              //IF THERE ARE MCQS IN DATABASE THEN RUN THE CODE BELOW
      {
        foreach($mcqs as $mcq)      //FOREACH LOOP TO GET ALL VALUES ONE BY ONE
        {
      ?>
            
        <tr style="background: #7C6CA0;">
          <td>
            <?php echo $mcq["mcqid"]; ?>    <!--DISPLAY IDS-->
          </td>           
          <td colspan="7">
            <strong><?php echo $mcq["statement"]; ?></strong>       <!--DISPLAY QUESTION-->
          </td>     
        </tr>
        <tr style="background: white; box-shadow: 0 15px 12px rgba(0,0,0,0.12), 0 19px 38px rgba(0,0,0,0.13);">
          <td style="width:15%;">1. <?php echo $mcq["answer1"]; ?></td>
          <td style="width:15%;">2. <?php echo $mcq["answer2"]; ?></td>
          <td style="width:15%;">3. <?php echo $mcq["answer3"]; ?></td>
          <td style="width:15%;">4. <?php echo $mcq["answer4"]; ?></td>
          <td style="width:15%;">5. <?php echo $mcq["answer5"]; ?></td>    
          <td style="width:15%;">Correct Answer: <?php echo $mcq["correctanswer"]; ?></td>

          <td><a href="edit_mcq.php?mcqid=<?php echo $mcq["mcqid"]; ?>">Edit</a></td>
          <td><a href="view_mcqs.php?mcqid=<?php echo $mcq["mcqid"]; ?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
        </tr>
        <tr>
          <td colspan="8"></td>
        </tr>
      <?php 
        } // end foreach
      } // end if
    ?>
    </table> 
  </div>
</div>




<!-- ///////////////// FOOTER ////////////////////// -->

  
    <footer class="footer text-center" style="height:auto;">
        <img src="../images/code3.png" class="img-fluid" height="100" width="100" >
        <hr style="background-color: gainsboro; width: 20%;">
        <p class="text-center">Admin Panel Copyright @2019 | QUIZBOARD FYP</p>
    </footer>

  





<script src="../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>