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


<!-- ///////////////// GET AND DELETE USERS CODE////////////////////// -->


<?php
require_once("user_model.php");        //USER MODEL FILE
$userObject = new User();              //OBJECT OF CLASS "USER"


//////DELETE USER BLOCK
if(isset($_GET["pin"]))           //IF DELETE USER BTN PRESSED AGAINST ANY ID
{
    $userObject->delete_user();         //DELETE FUNCTION OF USER CLASS
}

//GET USERS FUNCTION CALL TO DISPLAY THEM ALL
$users = $userObject->get_users();      //GET USERS FUNCTION OF CLASS MCQ TO SELECT & DISPLAY ALL
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
  <h1 class="font-weight-light text-center" style="color: gray; padding-top: 5%;">User Catalogue</h1>
  <h4 class=" font-weight-light my-4 text-center">Users list of quiz</h1>
  <hr class="mt-2 mb-5" style="width: 20%;">
  <div class="row mb-5">

  <table class="table" cellpadding='10px' align="center" width="80%"  style="box-shadow: 0 15px 12px rgba(0,0,0,0.22), 0 19px 38px rgba(0,0,0,0.33); border-color: grey; background-color: transparent; font-family: 'Roboto Condensed', sans-serif;">
        <tr style="background: #7C6CA0;">
            <th>User Pin</th>
            <th>Password</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Role</th>
            <th colspan="2">Action</th>
        </tr>
    <?php
    if(isset($users))
    {
        foreach($users as $user)
        {
        ?>
            <tr style="background: transparent;">
                <td><?php echo $user["pin"]; ?></td>
                <td><?php echo $user["password"]; ?></td>
                <td><?php echo $user["full_name"]; ?></td>
                <td><?php echo $user["email"]; ?></td>
                <td><?php echo $user["role"]; ?></td>
                <td><a href="edit_user.php?pin=<?php echo $user["pin"]; ?>">Edit</a></td>
                <td><a href="view_users.php?pin=<?php echo $user["pin"]; ?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
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