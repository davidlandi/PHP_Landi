<?php




class Validator {
    //put your code here
        
   /**
  * A static method to check if an email is valid.
  *
  * @param string $email must be a valid email
  *
  * @return boolean
  */    
    public static function emailIsValid($email) {
        return ( is_string($email) && !empty($email) 
                && filter_var($email, FILTER_VALIDATE_EMAIL) != false );
    }
    
    
     /**
    * A static method to check if a name is valid.
    *
    * @param string $name must be a valid name
    *
    * @return boolean
    */    
    public static function nameIsValid($name) {
        return ( is_string($name) && !empty($name) );       
    }
    
    /**
    * A static method to check if a password is valid.
    *
    * @param string $password must be a valid password
    *
    * @return boolean
    */    
    public static function passwordIsValid($password) {
        
        return (!empty($password)&&  strlen($password)>6);
    }
}
