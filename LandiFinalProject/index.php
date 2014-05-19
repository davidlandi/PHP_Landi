
<!--
David Landi 
Final PHP project 
For this project I have developed a SaaS based application that allows a user to
signup and dynamically create a mobile friendly web profile. 

To accomplish this I have used the following technologies: HTML5, PHP, CSS, 
JavaScript, Twitter BootStrap framework and SQL.  
-->
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/landi.css" rel="stylesheet">
     <script src="js//jquery.js"></script>		 
     <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
     <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
     <script src="js/bootstrap.js"></script> 
     <script src="js/landi.js"></script> 
     <title>Home</title>
</head>
<body>
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Portfolio Builder</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#placeholder">About</a></li>
                    <li><a href="#placeholder">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>DL Web Portfolio Builder</h1>
            <h3>Create your own signal page web portfolio to help set you apart from other candidates</h3>
            <p>SignUp, Customize and Submit. 3 easy steps and your done. </p><br>
            <p><a class="btn btn-large btn-success" href="#signup">Get Started!</a></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 pull-left">
                    <h1>Step 1</h1>
                    <p> Sign up.  Fill in the required form information including the name for your portfolio which will also be the name used for the domain if available.</p>
                </div>
                
            </div>
            <hr>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 pull-left">
                     <h2>Step 2</h2>
                     <p>Select from one of the 3 three available themes and then fill out the specified information.</p>
                </div>
                <div class="col-xs-12 col-md-6">
                     <div id="slideShow" class="carousel">
                         <ol class="carousel-indicators">
                            <li data-target="#slideShow" data-slide-to = "1"</li>
                            <li data-target="#slideShow" data-slide-to = "2"</li>
                            <li data-target="#slideShow" data-slide-to = "3"</li>              
                        </ol>
                            <center>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/temp1.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/sample2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/sample1.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </center>
                        <a class="carousel-control left" href="#slideShow" data-slide="prev"> 
                        <span class="icon-prev"></span></a>
                        <a class="carousel-control right" href="#slideShow" data-slide="next"> 
                        <span class="icon-next"></span></a>
                    </div>
                </div>               
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 pull-left">
                    <h2>Step 3</h2>
                    <p>After picking your theme and fill out all required sections just hit the submit button and your mobile friendly web portfolio will be instantly created.</p>
                    <p>You will be able to change your theme or the content of the page at any time in needed.</p>
                </div>            
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Developer Info</h4>
                    <p>
                        David Landi<br/>
                        djlandi@email.neit.edu
                    </p>
                </div>
                <div class="col-lg-4">
                    <h4>Credits</h4>
                    <p>
                        <a href="http://getbootstrap.com/">Bootstrap Framework</a><br/>
                        <a href="http://www.html5rocks.com/en/">HTML5 Resource</a><br/>
                        <a href="http://www.php.net/">PHP Resource</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <h4>About</h4>
                    <p>
                        This is a SaaS application that was developed for a final project for my PHP class at NEIT.
                    </p>
                </div>
            </div>
        </div>
    </div>
            
            
</body>
</html>
