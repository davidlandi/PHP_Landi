<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MemberPageContentModel
 *
 * @author David
 */
class MemberPageContentModel {
    
    public $theme;
    public $title;
    public $sub_title;
    public $skill_one;
    public $skill_two;
    public $skill_three;
    public $job_title;
    public $job_start_date;
    public $job_end_date;
    public $job_responsibilities;
    public $school_name;
    public $degree_program;
    public $degree_type;
    public $degree_status;
    public $school_comments;
    public $summary;
    public $objective;
    public $git_url;
    public $fb_url;
    public $linked_url;
    public $phone;
    public $contact_email;
    public $city;
    public $states;
    
    function __construct($paramArr = array()) {
        $this->map($paramArr);
    }
    
    public function map($paramArr){
        if(! is_array($paramArr)){
            return false;
        }
        if(array_key_exists('theme', $paramArr)){
            $this->setTheme($paramArr['theme']);
        }
        if(array_key_exists('title', $paramArr)){
            $this->setTitle($paramArr['title']);
        }
        if(array_key_exists('sub_title', $paramArr)){
            $this->setSubtitle($paramArr['sub_title']);
        }
        if(array_key_exists('skill_one', $paramArr)){
            $this->setSkill_one($paramArr['skill_one']);
        }
        if(array_key_exists('skill_two', $paramArr)){
            $this->setSkill_two($paramArr['skill_two']);
        }
        if(array_key_exists('skill_three', $paramArr)){
            $this->setSkill_three($paramArr['skill_three']);
        }
        if(array_key_exists('job_title', $paramArr)){
            $this->setJob_title($paramArr['job_title']);
        }
        if(array_key_exists('job_start_date', $paramArr)){
            $this->setJob_start_date($paramArr['job_start_date']);
        }
        if(array_key_exists('job_end_date', $paramArr)){
            $this->setJob_end_date($paramArr['job_end_date']);
        }
        if(array_key_exists('job_responsibilities', $paramArr)){
            $this->setJob_responsibilities($paramArr['job_responsibilities']);
        }
        if(array_key_exists('school_name', $paramArr)){
            $this->setSchool_name($paramArr['school_name']);
        }
        if(array_key_exists('degree_program', $paramArr)){
            $this->setDegree_program($paramArr['degree_program']);
        }
        if(array_key_exists('degree_type', $paramArr)){
            $this->setDegree_type($paramArr['degree_type']);
        }
        if(array_key_exists('degree_status', $paramArr)){
            $this->setDegree_status($paramArr['degree_status']);
        }
        if(array_key_exists('school_comments', $paramArr)){
            $this->setSchool_comments($paramArr['school_comments']);
        }
        if(array_key_exists('summary', $paramArr)){
            $this->setSummary($paramArr['summary']);
        }
        if(array_key_exists('objective', $paramArr)){
            $this->setObjective($paramArr['objective']);
        }
        if(array_key_exists('git_url', $paramArr)){
            $this->setGit_url($paramArr['git_url']);
        }
        if(array_key_exists('fb_url', $paramArr)){
            $this->setFb_url($paramArr['fb_url']);
        }
        if(array_key_exists('linked_url', $paramArr)){
            $this->setLinked_url($paramArr['linked_url']);
        }
        if(array_key_exists('phone', $paramArr)){
            $this->setPhone($paramArr['phone']);
        }
        if(array_key_exists('contact_email', $paramArr)){
            $this->setContact_email($paramArr['contact_email']);
        }
        if(array_key_exists('city', $paramArr)){
            $this->setCity($paramArr['city']);
        }
        if(array_key_exists('states', $paramArr)){
            $this->setStates($paramArr['states']);
        }
    }
    public function getTheme() {
        return $this->theme;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getSub_title() {
        return $this->sub_title;
    }

    public function getSkill_one() {
        return $this->skill_one;
    }

    public function getSkill_two() {
        return $this->skill_two;
    }

    public function getSkill_three() {
        return $this->skill_three;
    }

    public function getJob_title() {
        return $this->job_title;
    }

    public function getJob_start_date() {
        return $this->job_start_date;
    }

    public function getJob_end_date() {
        return $this->job_end_date;
    }

    public function getJob_responsibilities() {
        return $this->job_responsibilities;
    }

    public function getSchool_name() {
        return $this->school_name;
    }

    public function getDegree_program() {
        return $this->degree_program;
    }

    public function getDegree_type() {
        return $this->degree_type;
    }

    public function getDegree_status() {
        return $this->degree_status;
    }

    public function getSchool_comments() {
        return $this->school_comments;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function getObjective() {
        return $this->objective;
    }

    public function getGit_url() {
        return $this->git_url;
    }

    public function getFb_url() {
        return $this->fb_url;
    }

    public function getLinked_url() {
        return $this->linked_url;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getContact_email() {
        return $this->contact_email;
    }

    public function getCity() {
        return $this->city;
    }

    public function getStates() {
        return $this->states;
    }

    public function setTheme($theme) {
        $this->theme = $theme;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setSub_title($sub_title) {
        $this->sub_title = $sub_title;
    }

    public function setSkill_one($skill_one) {
        $this->skill_one = $skill_one;
    }

    public function setSkill_two($skill_two) {
        $this->skill_two = $skill_two;
    }

    public function setSkill_three($skill_three) {
        $this->skill_three = $skill_three;
    }

    public function setJob_title($job_title) {
        $this->job_title = $job_title;
    }

    public function setJob_start_date($job_start_date) {
        $this->job_start_date = $job_start_date;
    }

    public function setJob_end_date($job_end_date) {
        $this->job_end_date = $job_end_date;
    }

    public function setJob_responsibilities($job_responsibilities) {
        $this->job_responsibilities = $job_responsibilities;
    }

    public function setSchool_name($school_name) {
        $this->school_name = $school_name;
    }

    public function setDegree_program($degree_program) {
        $this->degree_program = $degree_program;
    }

    public function setDegree_type($degree_type) {
        $this->degree_type = $degree_type;
    }

    public function setDegree_status($degree_status) {
        $this->degree_status = $degree_status;
    }

    public function setSchool_comments($school_comments) {
        $this->school_comments = $school_comments;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function setObjective($objective) {
        $this->objective = $objective;
    }

    public function setGit_url($git_url) {
        $this->git_url = $git_url;
    }

    public function setFb_url($fb_url) {
        $this->fb_url = $fb_url;
    }

    public function setLinked_url($linked_url) {
        $this->linked_url = $linked_url;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setContact_email($contact_email) {
        $this->contact_email = $contact_email;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setStates($states) {
        $this->states = $states;
    }


    
    
}
