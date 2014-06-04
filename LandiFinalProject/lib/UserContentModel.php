<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserContentModel
 *
 * @author David
 */
class UserContentModel {
    
    
    public $title;
    public $theme;
    public $address;
    public $phone;
    public $email;
    public $content;
 

    
    function __construct($paramArr = array()) {
        $this->map($paramArr);
    }
    
  
    
    public function map($paramArr){
        if(! is_array($paramArr)){
            return false;
        }
        if(array_key_exists('title', $paramArr)){
            $this->setTitle($paramArr['title']);
        }
        
        if(array_key_exists('theme', $paramArr)){
            $this->setTheme($paramArr['theme']);
        }
   
        if(array_key_exists('address', $paramArr)){
            $this->setAddress($paramArr['address']);
        }
        if(array_key_exists('phone', $paramArr)){
            $this->setPhone($paramArr['phone']);
        }
        if(array_key_exists('email', $paramArr)){
            $this->setEmail($paramArr['email']);
            
        }
        if(array_key_exists('content', $paramArr)){
            $this->setContent($paramArr['content']);
        }

    }
    public function getTitle() {
        return $this->title;
    }

    public function getTheme() {
        return $this->theme;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContent() {
        return $this->content;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setTheme($theme) {
        $this->theme = $theme;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setContent($content) {
        $this->content = $content;
    }




  

  
}
