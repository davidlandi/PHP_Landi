<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        
        // Registering a variable with $_SESSION.
        if ( !isset( $_SESSION['counter']) ) {
             $_SESSION['counter'] = 0;
        }
       
         $_SESSION['counter']++;
         
         echo  $_SESSION['counter'];
        
        ?>
    </body>
</html>