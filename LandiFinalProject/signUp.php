<!DOCTYPE html>
<!--

-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/forms.css" rel="stylesheet" media="all">
        <title>Login</title>
    </head>
    <body>
<!--.............................. PHP Section.............................. -->        
        <?php
        
        ?>
<!--........................................................................ -->

<!--...............................Html Section............................. -->
        <div class="container text-center">
            <a href="#" title="Home"><img class="logo center-block img-responsive" src="img/logoDL.png" alt=""></a>
            <h1 class="frmHeader">Welcome. Please fill out the form bellow for your free membership.</h1>
            <img class="profImg img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
               alt="">
            <div class="container signInFrm">
            <form name="signIn" action="#" method="post">
                <input class="form-control input-lg inputMargTop" type="text" name="webName" value="" placeholder="Website Name" required autofocus>
                <input class="form-control input-lg " type="text" name="email" value="" placeholder="email" required>
                <input class="form-control input-lg" type="password" name="password" placeholder="password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign In</button>
                
            </form>
            </div>
            <a href="#" title="Login page" class="newAcc">Already a member? Click here to login</a>
            
        </div>
         
<!--........................................................................ -->

<!--.................................JS Pages .............................. -->        
        <script src="js//jquery.js"></script>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/landi.js"></script> 
<!--........................................................................ -->         
    </body>
</html>
