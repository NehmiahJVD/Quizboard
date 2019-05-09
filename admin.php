<!-- ///////////////// ADMIN SESSION PAGE CODE SESSION SET BY MOBILE NO////////////////////// -->

<?php

//START SESSION WHEN THE ADMIN LOGS IN

session_start();      

/////////LOGOUT BLOCK

if(isset($_POST['submitLogout']))   //WHEN LOGOUT IS PRESSED
{
	unset($_SESSION['pin']);    //REMOVE PHONE NUMBER SO THAT SESSION ENDS
	header("Location: quiz.php");     //TAKE BACK TO "QUIZ.PHP" PAGE FOR SIGN IN
	exit;
}

//////////PAGE ACCESS BLOCK

if (!isset($_SESSION['pin']) || $_SESSION["role"] != "admin")     //ACESS PAGE ONLY WHEN ADMIN AND THE NUMBER MATCHES
{
	header("Location: quiz.php");       //IF DOESN'T MATCH TAKE BACK TO SIGN IN PAGE
	exit;
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
      
    <link rel="shortcut icon" type="image/png" href="./images/favi.png"/>
    <link href="./fonts/material-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Poppins|Roboto|Roboto+Condensed" rel="stylesheet">   
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    

	</head>
	<body>



<!-- ///////////////// NAVBAR ////////////////////// -->


      
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" style="opacity: 0.85; " id="nav">
      <div class="container-fluid text-center align-items-center">
        <a class="navbar-brand ml-5 text-center" href="./admin.php" style="font-family: 'Oswald', sans-serif;">
          <i class="material-icons" style="color: #5B3582;">bubble_chart</i>
          QUIZ BOARD ADMIN PANEL
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="mcq/add_mcq.php" style="font-family: 'Roboto Condensed', sans-serif;">Add Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mcq/view_mcqs.php" style="font-family: 'Roboto Condensed', sans-serif;">View Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user/view_users.php" style="font-family: 'Roboto Condensed', sans-serif;">View Users</a>
              </li>
              <form method="post" action="#">
                <input type="submit" class="btn btnDownload text-center" style="width: 100%;" name="submitLogout" value="Logout">
              </form>
            </ul>
      </div>
    </nav>
      


<!-- ///////////////// THREE CONTROL BLOCKS ////////////////////// -->

  <div class="container">
    <h1 class="font-weight-light text-center h-100" style="color: gray; padding-top: 15%;">Admin Control Panel</h1>
    <h4 class=" font-weight-light my-4 text-center">Backend rights of quiz</h1>
    <hr class="mt-2 mb-5" style="width: 20%;">
    <div class="row text-center text-lg-left pb-5 mb-5">
    <div class="col-lg-4 col-md-4 col-6">
        <a target="" href="mcq/add_mcq.php" class="d-block mb-4 " id="langBloc1">
          <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px; font-family: 'Oswald', sans-serif;">Add Quiz</h1>  
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-6" >
        <a target="" href="mcq/view_mcqs.php" class="d-block mb-4 " id="langBloc2" >
          <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px; font-family: 'Oswald', sans-serif;">View Quiz</h1>  
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-6" >
        <a target="" href="user/view_users.php" class="d-block mb-4 " id="langBloc3" >
          <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">View Users</h1>  
        </a>
      </div>
    </div>
  </div>          




<!-- ///////////////// FOOTER ////////////////////// -->

  
    <footer class="footer text-center" style="height:auto;">
        <img src="./images/code3.png" class="img-fluid" height="100" width="100" >
        <hr style="background-color: gainsboro; width: 20%;">
        <p class="text-center">Admin Panel Copyright @2019 | QUIZBOARD FYP</p>
    </footer>

  


<!--/////////////INTERNAL CSS//////////////-->


<style type="text/css">
  

#langBloc1
{
  background-image: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%);
}
#langBloc2
{
  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
}
#langBloc3
{
  background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
}

#langBloc1, #langBloc2, #langBloc3
{
  text-decoration: none; 
  height: 170px; 
  border-radius: 8px; 
  box-shadow: 0 15px 12px rgba(0,0,0,0.15), 0 19px 38px rgba(0,0,0,0.15);
}



#langBloc1:hover, #langBloc2:hover, #langBloc3:hover
{
  background: gray;
  color: thistle;
}
</style>



<script src="./bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>