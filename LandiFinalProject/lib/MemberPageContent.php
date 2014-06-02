<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MemberPageContent
 *
 * @author David
 */
class MemberPageContent extends DB {
    public function __construct(){
        $this->setDb();
    }
    public function addMemberPageContent(MemberPageContentModel $dataModel){
        $return = false;
        
        $theme = $dataModel->getTheme();
        $title = $dataModel->getTitle();
        $sub_title = $dataModel->getSub_title();
        $skill_one = $dataModel->getSkill_one();
        $skill_two = $dataModel->getSkill_two();
        $skill_three = $dataModel->getSkill_three();
        $job_title = $dataModel->getJob_title();
        $job_start_date= $dataModel->getJob_start_date();
        $job_end_date = $dataModel->getJob_end_date();
        $job_responsibilities = $dataModel->getJob_responsibilities();
        $school_name = $dataModel->getSchool_name();
        $degree_program = $dataModel->getDegree_program();
        $degree_type = $dataModel->getDegree_type();
        $degree_status = $dataModel->getDegree_status();
        $school_comments = $dataModel->getSchool_comments();
        $summary = $dataModel->getSummary();
        $objective = $dataModel->getObjective();
        $git_url = $dataModel->getGit_url();
        $fb_url = $dataModel->getFb_url();
        $linked_url = $dataModel->getLinked_url();
        $phone = $dataModel->getPhone();
        $contact_email = $dataModel->getContact_email();
        $city = $dataModel->getCity();
        $states = $dataModel->getStates();
        
        if(null !== $this->getDB()){
            
        }
    }
}
