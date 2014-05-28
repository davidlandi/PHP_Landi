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
    private $firstName;
    private $lastName;
            
    
   
    protected $errors = array();
            
    function __construct() {
        
       $this->$firstName = filter_input(INPUT_POST, 'firstName');
       $this->$lastName = filter_input(INPUT_POST, 'firstName');
       $this->email = filter_input(INPUT_POST, 'email');      
       $this->username = filter_input(INPUT_POST, 'username');
       $this->password = filter_input(INPUT_POST, 'password');
       $this->confirmpassword = filter_input(INPUT_POST, 'confirmpassword');
    }

    public function getfirstName() {
        return $this->firstName;
    }

    public function getlastName() {
        return $this->lastName;
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
    public function firstNameEntryIsValid() {
        
         //todo put logic here (same as email)
        $userName = $this->firstName();
        if(empty($userName)){
            $this->errors["firstName"] = "Required Feild"."Please enter a firstName";
        }
        else if(!validator::nameIsValid($this->getfirstName())){
            $this->errors["firstName"]="Entry Error"."username is not valid";
        }
        
        return ( empty($this->errors["firstName"]) ? true : false ) ;
    }
    public function lastNameEntryIsValid() {
        
         //todo put logic here (same as email)
        $userName = $this->lastName();
        if(empty($userName)){
            $this->errors["lastName"] = "Required Feild"."Please enter a username";
        }
        else if(!validator::nameIsValid($this->getlastName())){
            $this->errors["lastName"]="Entry Error"."lastName is not valid";
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
        
         //todo put logic here (same as email)
        // also check if it matches confirmpassword
        $password = $this->getPassword();
        
        if(empty($password)){
        $this ->errors["password"] = "Required Feild"."Please enter a password";
        }
        else if($this->getConfirmpassword()!== $this->getPassword()){
            $this->errors ["password"] = "Entry Error"."Password must be greater than 6 characters.";
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
        $this->firstNameEntryIsValid();
        $this->lastNameEntryIsValid();
        $this->emailEntryIsValid();
        $this->usernameEntryIsValid();
        $this->passwordEntryIsValid();
        
        return ( count($this->errors) ? false : true );
    }
    
}