<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
David Landi
6/14
Final PHP Project
SignUp Page 
-->
<html lang="en">
<!--{LOAD CSS}.................................................................................................... -->     
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/forms.css" rel="stylesheet" media="all">
        <title>Sign Up</title>
    </head>
    <body>
<!--{END CSS}..................................................................................................... -->  

<!--{GLOBAL PHP}.................................................................................................. --> 
<!--
INFO

-->
        <?php
        Util::confirmAccess();
        $newMember = new SignUp();
        
        if(Util::isPostRequest()){
            $SignUpModel = new SignUpModel($_POST);
            
            if($newMember->create($SignUpModel)){
                echo '<p>New member has been added</p>';
                
            }
            else{echo '<p>Error. New member could not be added.</p>';}
        }

        ?>
<!--{END PHP}..................................................................................................... -->

<!--{MAIN CONTENT}................................................................................................ -->
<!--
INFO

-->
        <div class="container text-center">
            <a href="#" title="Home"><img class="logo center-block img-responsive" src="img/logoDL.png" alt=""></a>
            <h1 class="frmHeader">Welcome. Please fill out the form bellow for your free membership.</h1>
            <img class="profImg img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
               alt="">
            <div class="container signInFrm">
            <form name="signUp" action="#" method="post">
                <input class="form-control input-lg inputMargTop" type="text" name="website" value="" placeholder="Website Name" required autofocus>
                <input class="form-control input-lg " type="text" name="email" value="" placeholder="email" required>
                <input class="form-control input-lg" type="password" name="password" value="" placeholder="password" required>
               
                
                <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign Up</button>           
            </form>
            </div>
            <a href="#" title="Login page" class="newAcc">Already a member? Click here to login</a>           
        </div>
<!--{END MAIN CONTENT}............................................................................................ -->

<!--{lOAD JAVASCRIPT}............................................................................................. -->        
        <script src="js//jquery.js"></script>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/landi.js"></script> 
<!--{END JAVASCRIPT}.............................................................................................. -->         
    </body>
</html>
