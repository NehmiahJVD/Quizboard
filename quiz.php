<!--///////////////////PHP SIGN UP MODAL CODE/////////////////////////////-->


<?php
require_once("registration_model.php");         //REGISTERATION MODEL FILE
if(isset($_POST["registeruser"])){
    $registrationObject = new Registration();   //OBJECT OF CLASS "REGISTERATION" FROM MODEL
    $registrationObject->register_user();       //REGISTER USER FUNCTION FROM CLASS "REGISTERATION"
}
?>


<!--///////////////////PHP SIGN IN MODAL CODE/////////////////////////////-->


<?php
require_once("registration_model.php");         //REGISTERATION MODEL FILE
if(isset($_POST["loginuser"])){                 //IF LOGIN BUTTON IS CLICKED
    $pin = $_POST["pin"];           //TAKE PHONE NUMBER
    $password = $_POST["password"];             //TAKE PASSWORD
    $registrationObject = new Registration();   //OBJECT OF CLASS "REGISTERATION" FROM MODEL
    $registrationObject->signin_user($pin, $password);    //SIGNIN FUNCTION WITH THE VALUES TAKEN
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
        
      <link rel="shortcut icon" type="image/png" href="./images/favi.png"/>
      <link href="./fonts/material-icons.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald|Poppins|Roboto|Roboto+Condensed" rel="stylesheet">   
	    <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/quiz.css">
	    <link rel="stylesheet" href="css/style.css">

	</head>
	<body onload="assignHandler()">
        
        



<!-- ///////////////// NAVBAR ////////////////////// -->


      
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" style="opacity: 0.85; " id="nav">
        <div class="container-fluid">
          <a class="navbar-brand ml-5" href="./index.php" style="font-family: 'Oswald', sans-serif;">
            <i class="material-icons" style="color: #5B3582;">bubble_chart</i>
            QUIZ BOARD
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="./index.php" style="font-family: 'Roboto Condensed', sans-serif;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./learn.php" style="font-family: 'Roboto Condensed', sans-serif;">Learn</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./quiz.php" style="font-family: 'Roboto Condensed', sans-serif;">Quiz
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./product.php" style="font-family: 'Roboto Condensed', sans-serif;">App</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.php" style="font-family: 'Roboto Condensed', sans-serif;">About Us</a>
              </li>
            </ul>
            <a class="btn btnDownload ml-3 text-center" style="width: 8%;" href="https://mega.nz/#!9gZAxY7B!cipUjZGwutPElWuvfN32nTRNk4wU8qBxQRanwa07Lhc" target="_blank">Get App</a>

          </div>
        </div>
      </nav>



<!-- ///////////////// QUIZ SCREEN ////////////////////// -->
      

      <div class="container">
        <h1 class="font-weight-light text-center" style="color: gray; padding-top: 15%;">Ready for the test?</h1>
        <h4 class=" font-weight-light my-4 text-center">Lets recall what you learned</h4>
        <hr class="mt-2 mb-5" style="width: 20%;">
      </div>    
  

    
      <div class="container mb-5">
        <div class="row mb-3" >

      <!-- COLUMN 1 QUIZ SCREENS -->

          <div class="col-md-7 pl-3 pr-3 mt-5">
            <div class="row" id="blocksRow2">

            <!--DEFAULT SCREEN--> 

              <div class="col-12 pt-5 pb-4 text-center" id="quizBoxStart">
                <img src="./images/code3.png" class="img-fluid" height="100" width="100" > 
                <h1 class="font-weight-light text-center pt-5" style="color: gainsboro;">REGISTER TO START</h1>
                <h4 class=" font-weight-light my-4 text-center pb-3" style="color: gainsboro;">Create your quiz profile!</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupModal" style="width: 30%;">Sign Up</button><br>
                <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#signinModal" style="width: 30%;">Sign In</button>
              </div>
            </div>
          </div>  


        <!-- COLUMN 2 DESCRIPTIONS-->


          <div class="col-md-4">
            <h3 class="my-3 ml-5 pt-5 " style="font-family: 'Oswald', sans-serif;">An Interactive Widget</h3>
            <p class="ml-5" style="font-family: 'Roboto Condensed', sans-serif;">Our main offering to some programming geeks is the quiz assessment widget that lets you put your learning and memory to test enabling you to learn.</p>
            <h3 class="my-3 ml-5" style="font-family: 'Oswald', sans-serif;">Steps:</h3>
            <ul class="ml-5" style="font-family: 'Roboto Condensed', sans-serif; list-style-type: square;">
              <li>Register yourself</li>
              <li>Sign In</li>
              <li>Attempt Questions</li>
              <li>Assess your skills</li>
            </ul>
          </div>    
        </div>
      </div>  

  
    
<!-- ///////////////// SIGN UP MODAL ////////////////////// -->



      <div class="container">
        <div class="modal fade" id="signupModal">
          <div class="modal-dialog modal-dialog-centered" style="background-color: transparent; width: 90%;">
            <div class="modal-content text-center" id="gradCard">
              <button type="button" class="close text-right pr-3 pt-2" data-dismiss="modal">&times;</button>
              <div class="modal-body text-center">
                <img src="./images/code3.png" class="img-fluid " height="100" width="100" >
                <hr style="background-color: gainsboro; width: 20%;">
                <div class="card-body">
                  <h5 class="card-title text-center pb-5" style="font-family: 'Roboto Condensed', sans-serif;">Sign Up</h5>
                  <form class="form-signin text-center" method="post" action="#" style="font-family: 'Roboto Condensed', sans-serif;">
                    <input name="pin" type="number" required id="inputName" style="width: 80%;" class="form-control ml-5 inputProps" placeholder="User pin"  autofocus>
                    <br>
                    <input name="full_name" type="text" required id="inputName" style="width: 80%;" class="form-control ml-5 inputProps" placeholder="Name"  autofocus>
                    <br>
                    <input name="email" type="email" required email id="inputEmail" style="width: 80%;" class="form-control ml-5 inputProps" placeholder="Email address"  autofocus>
                    <br>
                    <input name="password" type="password" required id="inputPassword" style="width: 80%;" class="form-control ml-5 inputProps" placeholder="Password" >
                    <br>
                    <button class="btn btn-lg btn-primary text-center" type="submit" name="registeruser">Register</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<!-- ///////////////// SIGN IN MODAL ////////////////////// -->



      <div class="container">
        <div class="modal fade" id="signinModal">
          <div class="modal-dialog modal-dialog-centered" style="background-color: transparent; width: 90%;">
            <div class="modal-content text-center" id="gradCard">
              <button type="button" class="close text-right pr-3 pt-2" data-dismiss="modal">&times;</button>
              <div class="modal-body text-center">
                <img src="./images/code3.png" class="img-fluid " height="100" width="100" >
                <hr style="background-color: gainsboro; width: 20%;">
                <div class="card-body">
                  <h5 class="card-title text-center pb-5" style="font-family: 'Roboto Condensed', sans-serif;">Sign In</h5>
                  <form class="form-signin text-center" method="post" action="#" style="font-family: 'Roboto Condensed', sans-serif;">
                    <input name="pin" type="number" id="inputEmail" style="width: 80%;" class="form-control ml-5 inputProps" placeholder="User Pin" required autofocus>
                    <br>
                    <input name="password" type="password" required id="inputPassword" style="width: 80%;" class="form-control ml-5 inputProps" placeholder="Password" required>
                    <br>
                    <button class="btn btn-lg btn-primary text-center" type="submit" name="loginuser">Sign in</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




<!-- ///////////////// FOOTER ////////////////////// -->

  
  <footer class="footer text-center">
    <img src="./images/code3.png" class="img-fluid" height="100" width="100" >
    <hr style="background-color: gainsboro; width: 20%;">

    <ul class="foote_bottom_ul_amrc">
      <li><a href="./index.php">Home</a></li>
      <li><a href="./learn.php">Learn</a></li>
      <li><a href="./quiz.php">Quiz</a></li>
      <li><a href="./about.php">About</a></li>
    </ul>

    <p class="text-center">Copyright @2019 | QUIZBOARD FYP</p>
  </footer>

  

  <script src="./bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>