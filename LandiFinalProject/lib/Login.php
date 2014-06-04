<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author David
 */
class Login extends DB {
    //put your code here
        
   public static function processLogin(){
        $_SESSION["allowAccess"] = false;
        if (isset($_POST["password"]) && $_POST["password"] == $_POST["password"]){
         $_SESSION["allowAccess"] = true;
         $_session["email"] = $_POST["email"];
         header("Location:index.php");
        }
}
    /*function that confirms youre login process if
     *  not confirmed you stay on the login page*/
public static function confirmAccess(){
        if ( ! isset($_SESSION["allowAccess"]) 
                || $_SESSION["allowAccess"] != true){
            header("Location:login.php");
        }
    }

    
}
