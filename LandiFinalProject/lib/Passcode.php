<?php


class Passcode {
    
    /**
     * Global private var
     */
    private $passcode;
    
    /**
     * Constuctor
     */
    function __construct() {
        $this->setPasscode(filter_input(INPUT_POST, 'passcode'));
    }
    
    /**
     * Get passcod
     */
    public function getPasscode(){
        return $this->passcode;
    }
    
    /**
     * Set passcode
     */
    public function setPasscode($passcode){
        $this->passcode = $passcode;
    }
    
    /**
     * Valdiation for passcode
     */
    public function isValidPasscode(){
        return($this->getPasscode() === Config::PASS_CODE ? true : false);
    }
}
