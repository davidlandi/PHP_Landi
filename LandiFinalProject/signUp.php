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

        $newMember = new UserSignUp();
        $dataModel = new UserSignUpModel(filter_input_array(INPUT_POST));
        
        if(! isset($_SESSION['validcode'])){
            $_SESSION['validcode'] = false;
        }
        
        if(Util::isPostRequest()){
            if(Validator:: emailIsValid(filter_input(INPUT_POST, 'email'))&& 
               Validator:: passwordIsValid(filter_input(INPUT_POST, 'password'))&&
               Validator:: websiteIsValid(filter_input(INPUT_POST, website))){
                
                $id = $newMember->create($dataModel);
                if(id){
                    $_SESSION['validcode'] = true;
                    $webname = $dataModel->getWebsite();
                    header("Location: logIn.php");
                }
            }
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
                <input class="form-control input-lg inputMargTop" type="text" id="website" name="website" value="" placeholder="Website Name" required autofocus> 
                <input class="form-control input-lg " type="text" id="email" name="email" value="" placeholder="email" required>
                <input class="form-control input-lg" type="password" id="password" name="password" value="" placeholder="password" required>
                
               
                
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
