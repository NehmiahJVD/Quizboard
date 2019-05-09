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
      <link rel="stylesheet" href="css/learn.css">
	    <link rel="stylesheet" href="css/style.css">

	</head>
	<body>



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
              <li class="nav-item active">
                <a class="nav-link" href="./learn.php" style="font-family: 'Roboto Condensed', sans-serif;">Learn
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./quiz.php" style="font-family: 'Roboto Condensed', sans-serif;">Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./product.php" style="font-family: 'Roboto Condensed', sans-serif;">App</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.php" style="font-family: 'Roboto Condensed', sans-serif;">About Us</a>
              </li>
            </ul>
            <button class="btn btn-primary btnDownload ml-3 text-center" onclick="location.href='./quiz.php'"  style="width: 9%;">Quiz Widget</button>

          </div>
        </div>
      </nav>
      


<!-- ///////////////// LANGUAGE BLOCKS ////////////////////// -->


      <div class="container">
        <h1 class="font-weight-light text-center h-100" style="color: gray; padding-top: 15%;">Imagine your Career!</h1>
        <h4 class=" font-weight-light my-4 text-center">Choose your weapon and take over</h1>
        <hr class="mt-2 mb-5" style="width: 20%;">
        <div class="row text-center text-lg-left pb-5 mb-5">
          <div class="col-lg-3 col-md-4 col-6" >
            <a target="_blank" href="https://www.learn-c.org/" class="d-block mb-4 " id="langBlock1">
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px; font-family: 'Oswald', sans-serif;">C</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6" >
            <a target="_blank" href="https://www.learn-cpp.org/" class="d-block mb-4 " id="langBlock2" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px; font-family: 'Oswald', sans-serif;">C++</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6" >
            <a target="_blank" href="https://www.learncs.org/" class="d-block mb-4 " id="langBlock3" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">C#</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6" >
            <a target="_blank" href="https://www.learnjavaonline.org/" class="d-block mb-4 " id="langBlock4" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px; font-family: 'Oswald', sans-serif;">JAVA</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6" >
            <a target="_blank" href="https://www.w3schools.com/html/default.asp" class="d-block mb-4 " id="langBlock5" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px; font-family: 'Oswald', sans-serif;">HTML</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6" >
            <a target="_blank" href="https://www.w3schools.com/css/default.asp" class="d-block mb-4 " id="langBlock6" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">CSS</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank"  href="https://www.w3schools.com/js/default.asp" class="d-block mb-4 " id="langBlock7" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px; font-family: 'Oswald', sans-serif;">JS</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank"  href="https://www.w3schools.com/php/default.asp" class="d-block mb-4 " id="langBlock8" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px; font-family: 'Oswald', sans-serif;">PHP</h1>  
            </a> 
          </div>  
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank"  href="https://www.dartlang.org/" class="d-block mb-4 " id="langBlock9" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">DART</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank"  href="https://www.typescriptlang.org/" class="d-block mb-4 " id="langBlock10" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">TS</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank"  href="https://www.w3schools.com/python/default.asp" class="d-block mb-4 " id="langBlock11" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">PYTHON</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank"  href="https://www.codecademy.com/learn/learn-rails" class="d-block mb-4 " id="langBlock12" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">RUBY</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank" href="https://docs.microsoft.com/en-us/learn/modules/welcome-to-azure/" class="d-block mb-4 " id="langBlock13" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">AZURE</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank" href="https://www.w3schools.com/sql/default.asp" class="d-block mb-4 " id="langBlock14">
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">SQL</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank" href="https://www.tutorialspoint.com/asp.net/" class="d-block mb-4 " id="langBlock15" >
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">ASP.NET</h1>  
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a target="_blank" href="https://www.tutorialspoint.com/vb.net/" class="d-block mb-4 " id="langBlock16">
              <h1 class="my-3 text-center pt-5" style="color: #f5f5f5; font-size: 36px;  font-family: 'Oswald', sans-serif;">VB.NET</h1>  
            </a>
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