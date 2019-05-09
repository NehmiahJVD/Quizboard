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
      <link rel="stylesheet" href="css/home.css">
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
              <li class="nav-item active">
                <a class="nav-link" href="./index.php" style="font-family: 'Roboto Condensed', sans-serif;">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./learn.php" style="font-family: 'Roboto Condensed', sans-serif;">Learn</a>
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
            <a class="btn btnDownload ml-3 text-center" style="width: 8%;" href="https://mega.nz/#!9gZAxY7B!cipUjZGwutPElWuvfN32nTRNk4wU8qBxQRanwa07Lhc" target="_blank">Get App</a>
          </div>
        </div>
      </nav>


      
<!-- ///////////////// HERO IMAGE AND SLIDER ////////////////////// -->



      <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-md-4 text-left" style="background-color:transparent">
              <h1 class="font-weight-light" style="color: white; opacity: 0.7;">We help you learn and code in a <br> better way</h1>
              <p class="lead mt-2" style="color: white; opacity: 0.8;">See for yourself</p>
              <button type="button" class="btn btn-primary"  onclick="location.href='./about.php'" >Explore</button>
            </div>
            <div class="col-md-8" style="background-color: transparent;">
              <div class="container-fluid" style="border: transparent;">
                <div id="carouselExample" class="carousel" data-ride="carousel" data-interval="6000">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row" style="border: transparent;">
                        <div class="col-md-12"">
                          <img src="./images/3.png" class="img-fluid imgSize">
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row" style="border: transparent;">
                        <div class="col-md-12"">
                          <img src="./images/10.png" class="img-fluid imgSize">
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row" style="border: transparent;">
                        <div class="col-md-12"">
                          <img src="./images/4.png" class="img-fluid imgSize">
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row" style="border: transparent;">
                        <div class="col-md-12"">
                          <img src="./images/7.png" class="img-fluid imgSize">
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row" style="border: transparent;">
                        <div class="col-md-12"">
                          <img src="./images/11.png" class="img-fluid imgSize">
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>          
            </div>
          </div>
        </div>
      </header>
      
      

<!-- ///////////////// SECTION 2 DIVS3 SECTION ////////////////////// -->



      <section class="py-5 animate-box" style="background-color:thistle;" id="section2">
        <div class="container pb-5">
          <div class="row text-center mt-5">
            <div class="col-sm-4">
              <div class="card cardStyle">
                <div class="card-body ">
                  <i class="material-icons" style="color: #5B3582;">collections_bookmark</i>
                  <h5 class="card-title">LEARN</h5>
                  <p class="card-text">Effective learning with the provided links to well known resources </p>
                  <a href="./learn.php" class="btn btn-primary">Get</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card" id="gradCard">
                <div class="card-body ">
                  <i class="material-icons" style="color: white;">school</i>
                  <h5 class="card-title">TRY</h5>
                  <p class="card-text">Practical and hands on code learning is the perfect way to know what to do</p>
                  <a target="_blank" href="https://codepen.io/" class="btn btn-primary">Set</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card cardStyle">
                <div class="card-body " >
                  <i class="material-icons" style="color: #5B3582;">bubble_chart</i>
                  <h5 class="card-title">ASSESS</h5>
                  <p class="card-text">We learn more when we are provided with a challenge to learn so try our quiz</p>
                  <a href="./quiz.php" class="btn btn-primary">Ready</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



<!-- ///////////////// SECTION 3 BIG DIV1 ////////////////////// -->



      <section class="py-5" data-aos="fade-up" style="background-color:#F5F5F5;" id="section3">
        <div class="container-fluid mt-5 pb-5 pt-5">
          <div class="row">
              <div class="col-md-7 ml-4 ">
                  <p class="codepen" data-height="460" data-theme-id="dark" data-default-tab="html,result" data-user="whhhhhhaaaaaaat" data-slug-hash="rWrREJ"  data-pen-title="Just a computer with code and stuff (?)" style=" box-shadow: 0 15px 12px rgba(0,0,0,0.22), 0 19px 38px rgba(0,0,0,0.33);">
                    <span>See the Pen <a href="https://codepen.io/whhhhhhaaaaaaat/pen/rWrREJ/">
                      Just a computer with code and stuff (?)</a> by Ricardo dos santos (<a href="https://codepen.io/whhhhhhaaaaaaat">@whhhhhhaaaaaaat</a>)
                      on 
                    <a href="https://codepen.io">CodePen</a>.
                    </span>
                  </p>
                  <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
              </div>
            <div class="col-md-4 ">
              <h3 class="my-3 ml-5 pt-5 " style="font-family: 'Oswald', sans-serif;">A Coding Experience</h3>
              <p class="ml-5" style="font-family: 'Roboto Condensed', sans-serif;">A unique feature we offer is an external web code editor that can make your coding experience much better as you will be able to display the changes live on your finger tips. Codepen Editor comes with a vast library of web technologies.</p>
              <h3 class="my-3 ml-5" style="font-family: 'Oswald', sans-serif;">Features</h3>
              <ul class="ml-5" style="font-family: 'Roboto Condensed', sans-serif; list-style-type: square;">
                <li>Live Editor</li>
                <li>Result Screen</li>
                <li>Design Support</li>
                <li>Interactive</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

    



<!-- ///////////////// SECTION 4 BIG DIV2 ////////////////////// -->




      <section class="py-5" id="section4" data-aos="fade-up" style="background-color:thistle;  box-shadow: 0 15px 12px rgba(0,0,0,0.22), 0 19px 38px rgba(0,0,0,0.33);" >
        <div class="container-fluid pb-5 pt-5">
          <div class="row">
            <div class="col-md-4 ">
              <h3 class="my-3 ml-5 pt-5 " style="font-family: 'Oswald', sans-serif;">Quizboard App</h3>
              <p class="ml-5" style="font-family: 'Roboto Condensed', sans-serif;">Our main offering to some programming geeks is the quiz assessment desktop app that provides you a unique desktop experience enabling you to learn offline right on your desktop screen. </p>
              <h3 class="my-3 ml-5" style="font-family: 'Oswald', sans-serif;">Features</h3>
              <ul class="ml-5" style="font-family: 'Roboto Condensed', sans-serif; list-style-type: square;">
                <li>Desktop App</li>
                <li>Interactive UI</li>
                <li>Design Support</li>
              </ul>
              <a class="btn btn-primary ml-5" style="width: 30%; margin-bottom: 5%;" href="https://mega.nz/#!9gZAxY7B!cipUjZGwutPElWuvfN32nTRNk4wU8qBxQRanwa07Lhc" target="_blank">Download App</a>
            </div>
            <div class="col-md-7 ml-5 ">
              <img src="./images/qui.png" class="img-fluid" style=" box-shadow: 0 15px 12px rgba(0,0,0,0.22), 0 19px 38px rgba(0,0,0,0.33);">
            </div>
          </div>
        </div>
      </section>
        


<!-- ///////////////// SECTION 5 LANGUAGE SLIDER ////////////////////// -->




      <section class="py-5" data-aos="fade-up" style="background-color:#F5F5F5" id="section5">
        <div class="container pb-5 pt-2" >
          <h1 class="my-4 text-center" style="font-family: 'Oswald', sans-serif;">Languages to learn</h1>
          <h4 class="my-4 text-center" style="font-family: 'Roboto Condensed', sans-serif;">Lets learn together!</h4>
          <hr style="width: 10%;">

          <!-- CAROUSEL -->
                
          <div id="carouselExampleIndicators" class="carousel slide pt-5 " data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active mb-5 pl-3 pr-3">
                <div class="card-deck text-center">
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead1">C</h5>
                    <div class="card-body">
                      <h5 class="card-title">A Fundamental language</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">General prurpose, fundamental and high level langauge developed in 1972</p>
                    </div>      
                  </div>
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead2">C++</h5>
                    <div class="card-body">
                      <h5 class="card-title">Multi-purpose tool</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">An imperative, object-oriented and generic language developed in 1998</p>
                    </div>
                  </div>
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead3">C#</h5>
                    <div class="card-body">
                      <h5 class="card-title">Futuristic gaint</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">A growing, general-purpose, multi-paradigm langauge developed in 2001</p>
                    </div>
                  </div>
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead4">JAVA</h5>
                    <div class="card-body">
                      <h5 class="card-title">Dominator</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">A concurrent, object-oriented, write once run anywhere coder developed in 1995</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item mb-5 pl-3 pr-3">
                <div class="card-deck text-center">
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead1">HTML</h5>
                    <div class="card-body">
                      <h5 class="card-title">Fundamental of web</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">A language of formatting, speaking and expressing on web pages developed in 1990</p>
                    </div>      
                  </div>
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead2">CSS</h5>
                    <div class="card-body">
                      <h5 class="card-title">Styling tool</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">A presentation and styling language for webpage makeover developed in 1994</p>
                    </div>
                  </div>
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead3">JS</h5>
                    <div class="card-body">
                      <h5 class="card-title">The future of dev</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">The most used dynamic, prototype-based and multi-paradigm tool deveoped in 1995</p>
                    </div>
                  </div>
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead4">PHP</h5>
                    <div class="card-body">
                      <h5 class="card-title">Backend legend</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">A server-side, dynamic scripting buddy connecting the webpages with databases since 1994</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item mb-5 pl-3 pr-3">
                <div class="card-deck text-center">
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead1">VB.NET</h5>
                    <div class="card-body">
                      <h5 class="card-title">Microsoft desktop tool</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">A multi-paradigm, object-oriented language, implemented on the .NET Framework in 2002</p>
                    </div>      
                  </div>
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead2">ASP.NET</h5>
                    <div class="card-body">
                      <h5 class="card-title">Powerful backend provider</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">An open-source, server-side web app framework designed for dymaic pages in 2002</p>
                    </div>
                  </div>
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead3">RUBY</h5>
                    <div class="card-body">
                      <h5 class="card-title">Database on rails</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">A dynamic, interpreted, reflective, object-oriented, general language from 1990s</p>
                    </div>
                  </div>
                  <div class="card cardStyle">
                    <h5 class="card-header" id="fireHead4">PYTHON</h5>
                    <div class="card-body">
                      <h5 class="card-title">The one that controls</h5>
                      <p class="card-text" style="font-family: 'Roboto Condensed', sans-serif;">Interpreted and high level most significant, multi-purpose language developed in 1991</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </section>





<!-- ///////////////// SECTION 6 POWERED BY BLOCKS ////////////////////// -->




      <header class="bg-dark text-center py-5 mb-4 mb-5 ">
        <div class="container">
          <h1 class="my-4 text-center" style=" color: white; font-family: 'Oswald', sans-serif;">Empowering Resources</h1>
          <h4 class="my-4 text-center" style=" color: white; font-family: 'Roboto Condensed', sans-serif;">Making you aware of the trends</h4>
          <hr style="background-color: white; width: 10%;">
        </div>
      </header>

      <div class="container" style="margin-bottom: 5%;">
        <div class="row pt-4">
          <div class="col-xl-2 col-md-6 col-sm-4 pb-5" >
            <img src="./images/cb1.png" height="155" width="230" style="box-shadow: 0 15px 12px rgba(0,0,0,0.06), 0 19px 38px rgba(0,0,0,0.08);" class="card-img-top rounded-circle" alt="...">
          </div>
          <div class="col-xl-2 col-md-6 col-sm-4 pb-5 " style="padding-top: 12%;">
            <img src="./images/cb5.png" height="155" width="230" style="box-shadow: 0 15px 12px rgba(0,0,0,0.06), 0 19px 38px rgba(0,0,0,0.08);"  class="card-img-top rounded-circle" alt="...">
          </div>
          <div class="col-xl-2 col-md-6 col-sm-4 pb-5 ">
            <img src="./images/cb3.png" height="155" width="230" style="box-shadow: 0 15px 12px rgba(0,0,0,0.06), 0 19px 38px rgba(0,0,0,0.08);"  class="card-img-top rounded-circle" alt="...">
          </div>
          <div class="col-xl-2 col-md-6 col-sm-4 pb-5 " style="padding-top: 12%;" >
            <img src="./images/cb9.png" height="155" width="230" style=" box-shadow: 0 15px 12px rgba(0,0,0,0.06), 0 19px 38px rgba(0,0,0,0.08);"  class="card-img-top rounded-circle" alt="...">
          </div>
          <div class="col-xl-2 col-md-6 col-sm-4 pb-5  " >
            <img src="./images/cb2.svg" height="155" width="230" style="box-shadow: 0 15px 12px rgba(0,0,0,0.06), 0 19px 38px rgba(0,0,0,0.08);"  class="card-img-top rounded-circle" alt="...">
          </div>
          <div class="col-xl-2 col-md-6 col-sm-4  pb-5 " style="padding-top: 12%;">
            <img src="./images/cb4.png" height="155" width="230" style="box-shadow: 0 15px 12px rgba(0,0,0,0.06), 0 19px 38px rgba(0,0,0,0.08);"  class="card-img-top rounded-circle" alt="...">
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
    <script>
    
    
	
    
    </script>
  </body>
</html>