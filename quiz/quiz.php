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



<?php
if(isset($_POST["submitmcq"]))
{
    $current_mcq_no = $_SESSION["current_mcq_no"];
    $current_mcq = $_SESSION["quiz"][$current_mcq_no];
    
    if($current_mcq_no <= 9) {
        $submitted_mcq_no = $current_mcq_no - 1;
        $submitted_mcq = $_SESSION["quiz"][$submitted_mcq_no];
        if(isset($_POST["answer"])) {
            if($_POST["answer"] == $submitted_mcq["correctanswer"]){
                $_SESSION["answers"][$submitted_mcq_no] = 1;
            } else{
                $_SESSION["answers"][$submitted_mcq_no] = 0;
            }
        } else {
            $_SESSION["answers"][$submitted_mcq_no] = 0;        
        } 
        $_SESSION["current_mcq_no"] = $current_mcq_no + 1;
    } else {
        $submitted_mcq_no = $current_mcq_no - 1;
        $submitted_mcq = $_SESSION["quiz"][$submitted_mcq_no];
        if(isset($_POST["answer"])) {
            if($_POST["answer"] == $submitted_mcq["correctanswer"]){
                $_SESSION["answers"][$submitted_mcq_no] = 1;
            } else{
                $_SESSION["answers"][$submitted_mcq_no] = 0;
            }
        } else {
            $_SESSION["answers"][$submitted_mcq_no] = 0;        
        } 
        header("location: result.php");
        exit;
    }
} else {
    $current_mcq_no = $_SESSION["current_mcq_no"];
    $current_mcq = $_SESSION["quiz"][$current_mcq_no];
    $_SESSION["current_mcq_no"] = $current_mcq_no + 1;
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
      


    <div class="container" style="margin-bottom: 10%;">
      <h1 class="font-weight-light text-center" style="color: gray; padding-top: 7%;">Quiz Widget</h1>
      <h4 class=" font-weight-light my-4 text-center">Attempt random programming quiz!</h1>
      <hr class="mt-2 msb-5" style="width: 20%;">
    <div class="row">
        <div class="col-8 pt-5 pb-4 text-center" style=" margin-left: 15%; box-shadow: 0 15px 12px rgba(0,0,0,0.22), 0 19px 38px rgba(0,0,0,0.33); background-color: #4E3585; border-radius: 8px; color: ghostwhite; height:80%;">
            <form action="quiz.php" method="POST" style="font-family: 'Roboto Condensed', sans-serif;">

                <h2 class="text-center mb-4" style="font-family: 'Oswald', sans-serif; font-size: 22px;">Question: <?php echo $current_mcq_no + 1; ?>/10</h2>
                
                <h2 class="mb-3" style="color:color: gainsboro;"><?php echo '('.$current_mcq["statement"].')' ?></h2>
                <input type="radio" name="answer" value="1"/><?php echo $current_mcq["answer1"] ?><br/><br/>
                <input type="radio" name="answer" value="2"/><?php echo $current_mcq["answer2"] ?><br/><br/>
                <input type="radio" name="answer" value="3"/><?php echo $current_mcq["answer3"] ?><br/><br/>
                <input type="radio" name="answer" value="4"/><?php echo $current_mcq["answer4"] ?><br/><br/>
                <input type="radio" name="answer" value="5"/><?php echo $current_mcq["answer5"] ?><br/><br/>
                <button class="btn btnDownload" style="background-color: gainsboro; color: black;" type="submit" name="submitmcq">Submit</button>
            </form>
        </div>  
    </div>      
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

