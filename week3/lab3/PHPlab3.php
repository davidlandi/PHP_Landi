<!DOCTYPE html>
<!--
David landi 2014
Goals 
1. Re - populate post values into the input fields.
2. Put the "inputerror" class into the input from fields if they are not 
populated on a post 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- ################ In Doc css ################ -->
        <style>
            .error{
                border: 1px solid red;
                padding: 0.2em;
                color: red;
            }
            
            .inputerror{
                border: 1px solid red;
            }
        </style>
        <!-- ################ end In Doc css ################ -->
    </head>
    <body>
        <?php
        if(!empty($_POST)){
            $errorMessages = array(
                "email" => 'email is invalid',
                "username" => 'username is not found',
                "password" => 'password does not work',
            );
            
            $email = filter_input(INPUT_POST, 'email');
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            
            if(!empty($email)){
                $errorMessage['email']='';
            }
            else{
                echo '<style>input[name=email]{border: 1px solid red;}</style>';
            }
            if(!empty($username)){
                $errorMessage['username']='';
            }
            else{
                echo '<style>input[name=username]{border: 1px solid red;}</style>';
            }
            if(!empty($password)){
                $errorMessages['password']='';
            }
            else{
                echo '<style>input[name=password] {border: 1px solid red;}</style>';
            }
        }       
        ?>
        
        <h2>Lab3 Form</h2>
        <form name="mainform" action="#" method="post">
            Email: <input type="text" name="email" /> <br /> 
            <?php 
            if ( !empty($errorMessages["email"]) ) 
                echo '<p class="error">',$errorMessages["email"], '</p>';
            ?>
            Username: <input type="text" name="username" /> <br /> 
            <?php 
            if ( !empty($errorMessages["username"]) )
                echo '<p class="error">',$errorMessages["username"], '</p>';                
            ?>           
            Password: <input type="password" name="password" /> <br />
            <?php 
            if ( !empty($errorMessages["password"]) )
                echo '<p class="error">',$errorMessages["password"], '</p>';                
            ?>
            <br />
            <input type="submit" value="Submit" />                        
        </form>
    </body>
</html>
