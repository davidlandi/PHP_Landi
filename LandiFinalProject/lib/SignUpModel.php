<?php
/**
 * Description of NewMemberSignUpModel
 *
 * @author David
 */
class SignUpModel {
     
    public $website;
    public $email;
    public $password;
    public $user_id;
    
    function __construct($paramArr) {
        $this->map($paramArr);
    }
    
    public function map($paramArr){
        if(! is_array($paramArr)){
            return false;
        }
        if(array_key_exists('website', $paramArr)){
            $this->setWebsite($paramArr['website']);
        }
        if(array_key_exists('email', $paramArr)){
            $this->setEmail($paramArr['email']);
        }
        if(array_key_exists('password', $paramArr)){
            $this->setPassword($paramArr['password']);
        }
        if(array_key_exists('user_id', $paramArr)){
            $this->setUser_id($paramArr['user_id']);
        }
    }
    public function getWebsite() {
        return $this->website;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getUser_id() {
        return $this->user_id;
    }
    public function setWebsite($website) {
        $this->website = $website;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }



}
