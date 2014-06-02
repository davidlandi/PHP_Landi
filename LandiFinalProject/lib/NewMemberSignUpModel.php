<?php
/**
 * Description of NewMemberSignUpModel
 *
 * @author David
 */
class NewMemberSignUpModel {
    
    private $email;
    private $website;
    private $password;
    
    function __construct($paramArr = array()) {
        $this->map($paramArr);
    }
    
    public function map($paramArr){
        if(! is_array($paramArr)){
            return false;
        }
        if(array_key_exists('email', $paramArr)){
            $this->setEmail($paramArr['email']);
        }
        if(array_key_exists('website', $paramArr)){
            $this->setEmail($paramArr['website']);
        }
        if(array_key_exists('password', $paramArr)){
            $this->setEmail($paramArr['password']);
        }
    }
    public function getEmail() {
        return $this->email;
    }

    public function getWebsiteName() {
        return $this->website;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setWebsiteName($website) {
        $this->website = $website;
    }

    public function setPassword($password) {
        $this->password = $password;
    }



}
