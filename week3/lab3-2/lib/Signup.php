<?php


class Signup {
    //put your code here
    
    /*
     * Todo -   Store the POST values into a variable and 
     * Todo - output non-password fields back into the input value
     * Todo -   Validation for all input fields
     * Todo -   show message if there is an error other wise notify the 
     *          user that all the data submited is correct
     */
    
    
    private $email;
    private $username;
    private $password;
    private $confirmpassword;
   
    protected $errors = array();
            
    function __construct() {
       
        $this->email = filter_input(INPUT_POST, 'email');      
        $this->username = filter_input(INPUT_POST, 'username');
        $this->password = filter_input(INPUT_POST, 'password');
        $this->confirmpassword = filter_input(INPUT_POST, 'confirmpassword');
    }

    
    
    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getConfirmpassword() {
        return $this->confirmpassword;
    }
    
   /**
    * A method to return all errors found in the post
    *
    * @return array
    */  
    public function getErrors() {
        return $this->errors;
    }
    
    
    
    /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */   
    


    public function emailEntryIsValid() {
        
         $email = $this->getEmail();
         
         if ( empty($email) ) {
            $this->errors["email"] = "Email is missing.";
         } else if ( !Validator::emailIsValid($this->getEmail()) ) {
            $this->errors["email"] = "Email is not valid.";                
         }
        
        return ( empty($this->errors["email"]) ? true : false ) ;
    }
    
    /**
    * A method to check if a posted username is valid.
    * Adds a custom message to the errors list key["username"]
    *
    * @return boolean
    */    
    public function usernameEntryIsValid() {
        
         //todo put logic here (same as email)
        $userName = $this->getUsername();
        if(empty($userName)){
            $this->errors["username"] = "Required Feild"."Please enter a username";
        }
        else if(!validator::nameIsValid($this->getUsername())){
            $this->errors["username"]="Entry Error"."username is not valid";
        }
      
        return ( empty($this->errors["username"]) ? true : false ) ;
        
    }
    
    /**
    * A method to check if a posted password is valid.
    * Adds a custom message to the errors list key["password"]
    *
    * @return boolean
    */    
    public function passwordEntryIsValid() {
        $password = $this->getPassword();
        $confirm = $this->getConfirmpassword();
        
        if ( empty($password) ) {
            $this->errors["password"] = "Password is missing.";
         } else if ( !Validator::passwordIsValid($this->getPassword()) ) {
            $this->errors["password"] = "Password is not valid. Password must be at least 6 characters long";                
         }
         
         if ( empty($confirm) ) {
            $this->errors["confirmpassword"] = "Confirm Password is missing.";
         } else if ( !Validator::passwordIsValid($this->getConfirmpassword()) ) {
            $this->errors["confirmpassword"] = "Confirm Password is not valid. Confirm Password must be at least 6 characters long";                
         }
         
         if ($password != $confirm) {
             $this->errors["confirmpassword"] = "Confirm Password does not match.";
         }         
            return ( empty($this->errors["password"]) ? true : false ) ;
    }
    
    
    /**
    * A static method to check if a Post request has been made.
    *    
    * @return boolean
    */    
    public function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
    
    
    
    /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */ 
    public function entryIsValid(){
        $this->emailEntryIsValid();
        $this->usernameEntryIsValid();
        $this->passwordEntryIsValid();
        
        return ( count($this->errors) ? false : true );
    }
    
}