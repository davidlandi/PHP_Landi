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
 <!-- ################ functions to add class to fields ################ -->
        <?php   
        function EmptyEmail(){
            $email = filter_input(INPUT_POST, 'email');
            $class = 'class="inputerror"';
            if(empty($email)&& empty($_POST)||!empty($email)&& !empty($_POST)){
               $class = ""; 
            }
            echo $class;
        }
        function EmptyUsername(){
            $username = filter_input(INPUT_POST, 'username');
            $class = 'class="inputerror"';
            if(empty($username)&& empty($_POST)||!empty($username)&& !empty($_POST)){
               $class = ""; 
            }
            echo $class;
        }
        function EmptyPassword(){
            $password = filter_input(INPUT_POST, 'password');
            $class = 'class="inputerror"';
            if(empty($password)&& empty($_POST)||!empty($password)&& !empty($_POST)){
               $class = ""; 
            }
            echo $class;
        }
 //<!-- ################end functions to add class to fields ################ -->
        
 //<!-- ################function to add .error class to form ################ -->    
        function FieldValidator(){
            $email = filter_input(INPUT_POST, 'email');
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            
            if(!empty($_POST)){              
                $errorMessages = array(
                    "email" =>'email is invalid',
                    "username" =>'username is not found',
                    "password" => 'password does not work',
                    );
                if(!empty($email)){
                    $errorMessages['email']='';                   
                }               
                else{
                    echo '<p class="error">',$errorMessages["email"], '</p>';
                }
                 if(!empty($username)){
                    $errorMessages['username']='';
                }
                else{
                    echo '<p class="error">',$errorMessages["username"], '</p>';
                }
                 if(!empty ($password)){
                    $errorMessages['password']='';
                }
                else{
                    echo '<p class="error">',$errorMessages["password"], '</p>';
                }
            }           
        }
  //<!-- ################end function to add .error class to form ################ --> 
            $email = filter_input(INPUT_POST, 'email');
            $username = filter_input(INPUT_POST, 'username');
        ?>
  <!-- ################ html form ################ -->      
        <h2>Lab3 Form</h2>
        <form name="mainform" action="#" method="post">
            <?php echo FieldValidator();?>
            Email: <input type="text" name="email"<?php echo EmptyEmail();?> 
                          value="<?php echo $email; ?>"/> 
                   
        
            <br /> 
            
            Username: <input type="text" name="username"<?php echo EmptyUsername();?>
                             value="<?php echo $username;?>"/>  
            
            <br /> 
                    
            Password: <input type="password" name="password"<?php echo EmptyPassword();?>
                             value=""/>  
            <br />
           
            <br />
            <input type="submit" value="Submit"/>                        
        </form>
 <!-- ################ end html form ################ -->        
    </body>
</html>
