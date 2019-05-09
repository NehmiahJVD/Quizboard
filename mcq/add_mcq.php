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




<!-- ///////////////// ADD MCQ CODE CODE OOP STYLE////////////////////// -->



<?php
require_once("mcq_model.php");     //MCQ MODEL FILE
if(isset($_POST["addmcq"]))        //IF ADD MCQ BTN PRESSED
{
    $mcqObject = new MCQ();        //OBJECT OF CLASS "MCQ" FROM MODEL
    $mcqObject->add_mcq();         //ADD MCQ FUNCTION OF MCQ CLASS
}
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
      


<!-- ///////////////// ADD MCQ CARD ////////////////////// -->



<div class="container" style="margin-top: 5%; text-center">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-update my-5" >
            <div class="card-body">
              <h5 class="card-title text-center">ADD QUIZ</h5>
              <form action="#" method="post" style="font-family: 'Roboto Condensed', sans-serif;">
                <br/>
                <textarea placeholder="Enter question here..." class="form-control" name="statement" cols="52" rows="2"><?php echo isset($_POST["statement"]) ? $_POST["statement"] : ""; ?></textarea> <!--QUESTION VALUE SET TO NULL AT START-->
                <br/>
                <input class="form-control float-left mb-4" type="text" name="answer1" placeholder="Option1" style="width:80%;"/>
                <input class="form-control float-right" type="radio" name="correctanswer" value="1" style="width: 10%;" />
                <br/>
                <input class="form-control float-left mb-4" type="text" name="answer2" placeholder="Option2" style="width:80%;"/>
                <input class="form-control float-right" type="radio" name="correctanswer" value="2" style="width: 10%;"/>
                <br/>
                <input class="form-control float-left mb-4" type="text" name="answer3" placeholder="Option3" style="width:80%;"/>
                <input class="form-control float-right" type="radio" name="correctanswer" value="3" style="width: 10%;"/>
                <br/>
                <input class="form-control float-left mb-4" type="text" name="answer4" placeholder="Option4" style="width:80%;"/>
                <input class="form-control float-right" type="radio" name="correctanswer" value="4" style="width: 10%;"/>
                <br/>
                <input class="form-control float-left mb-4" type="text" name="answer5" placeholder="Option5" style="width:80%;"/>
                <input class="form-control float-right" type="radio" name="correctanswer" value="5" style="width: 10%;"/>
                <br/>
                <button class=" btn btnDownload" type="submit" name="addmcq">Done</button>
              </form>
            </div>
          </div>
        </div>
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