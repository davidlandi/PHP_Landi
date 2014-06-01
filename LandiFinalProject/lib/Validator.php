<?php


class Validator {
    /**
     * static function to check if email is valid
     * check if email field is empty
     */
    public static function emailIsValid($email){
        return(is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) != false);
    }
    
    /**
     * static function to check if textareas are Valid
     * check if they are empty
     * check to make sure they are less than 150 characters
     */
    public static function textAreaValid($textArea){
        return(is_string($textArea) && !empty($textArea) && strlen($textArea) <= 150);
    }
}
