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


<!-- ///////////////// UPDATE USER CODE CODE OOP STYLE////////////////////// -->



<?php

require_once("user_model.php");       //USER MODEL FILE
$userObject = new User();             //OBJECT OF CLASS "USER" FROM MODEL

//UPDATE USER BLOCK
if(isset($_POST["updateuser"]))       //IF UPDATE USER BTN PRESSED
{
    $userObject->update_user();       //UPDATE FUNCTION OF USER CLASS
}
$user = NULL;

//GET MCQ FOR UPDATING AGAINST ID
if(isset($_GET['pin']))
{
    $user = $userObject->get_user($_GET["pin"]);   //GET USER FUNCTION OF USER CLASS 
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
                <a class="nav-link" href="../mcq/add_mcq.php" style="font-family: 'Roboto Condensed', sans-serif;">Add Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../mcq/view_mcqs.php" style="font-family: 'Roboto Condensed', sans-serif;">View Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./view_users.php" style="font-family: 'Roboto Condensed', sans-serif;">View Users</a>
              </li>
              <form method="post" action="#">
                <input type="submit" class="btn btnDownload text-center" style="width: 100%;" name="submitLogout" value="Logout">
              </form>
            </ul>
      </div>
    </nav>
      


<!-- ///////////////// SCORECARD ////////////////////// -->



<div class="container" style="margin-top: 5%; text-center">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-update my-5" >
            <div class="card-body">
              <h5 class="card-title text-center">EDIT USER</h5>
              <?php

              if(count($user) > 0)
              {
              ?>
              
              <form action="edit_user.php" method="post" style="font-family: 'Roboto Condensed', sans-serif;">
                <input  class="form-control float-left mb-4" type="text" name="pin" value="<?php echo $user["pin"]; ?>" hidden />
                <br>  
                <input  class="form-control float-left mb-4" type="text" name="full_name" size="50" value="<?php echo $user["full_name"]; ?>" />
                <br>
                <input  class="form-control float-left mb-4" type="password" name="password" size="50" value="<?php echo $user["password"]; ?>" />
                <br>  
                <input  class="form-control float-left mb-4" type="text" name="email" size="50" value="<?php echo $user["email"]; ?>" />
                <br> 
                <input  class="form-control float-left mb-4" type="text" name="role" size="50" value="<?php echo $user["role"]; ?>" />
                <br>  
                <button class="btn btnDownload" type="submit" name="updateuser">Update</button>
           
                <?php
                 } // end if
                ?>
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
<script src="./js/jquery.waypoints.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>