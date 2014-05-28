<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Passcode
 *
 * passcode class is used take in passcoed and determine if it matches the 
 * set passcode
 */
//creating class
class Passcode {
    //put your code here
    
    private $passcode;
    
    //class cunstructor
    function __construct() {
        $this->setPasscode(filter_input(INPUT_POST, 'passcode'));
    }
    
    //getter
    public function getPasscode() {
        return $this->passcode;
    }
    //setter
    public function setPasscode($passcode) {
        $this->passcode = $passcode;
    }
    
    //validation
    public function isValidPasscode(){
        // shortcut for if else checks to see if true (else) : false
        return ( $this->getPasscode() === Config::PASS_CODE ? true : false );
    }
}
