
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
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Profile Builder</a>
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
            <h1>Web Profile Builder</h1>
            <h3>Build your own custom web profile in 3 easy steps</h3>
            <p>Signup  -  Customize  -  Publish</p><br>
            <p><a class="btn btn-large btn-success" href="#signup">Get Started!</a></p>
        </div>
    </div>
</body>
</html>
