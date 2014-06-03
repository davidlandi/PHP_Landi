<?php

/**
 * Description of MemberPageContent
 *
 * @author David
 */
class MemberPageContent extends DB {
     function __construct(){
        $this->setDb();
    }
    public function create($MemberPageContentModel){
        $result = false;
        
        $theme = $MemberPageContentModel->getTheme();
        $title = $MemberPageContentModel->getTitle();
        $sub_title = $MemberPageContentModel->getSub_title();
        $skill_one = $MemberPageContentModel->getSkill_one();
        $skill_two = $MemberPageContentModel->getSkill_two();
        $skill_three = $MemberPageContentModel->getSkill_three();
        $job_title = $MemberPageContentModel->getJob_title();
        $job_start_date= $MemberPageContentModel->getJob_start_date();
        $job_end_date = $MemberPageContentModel->getJob_end_date();
        $job_responsibilities = $MemberPageContentModel->getJob_responsibilities();
        $school_name = $MemberPageContentModel->getSchool_name();
        $degree_program = $MemberPageContentModel->getDegree_program();
        $degree_type = $MemberPageContentModel->getDegree_type();
        $degree_status = $MemberPageContentModel->getDegree_status();
        $school_comments = $MemberPageContentModel->getSchool_comments();
        $summary = $MemberPageContentModel->getSummary();
        $objective = $MemberPageContentModel->getObjective();
        $git_url = $MemberPageContentModel->getGit_url();
        $fb_url = $MemberPageContentModel->getFb_url();
        $linked_url = $MemberPageContentModel->getLinked_url();
        $phone = $MemberPageContentModel->getPhone();
        $contact_email = $MemberPageContentModel->getContact_email();
        $city = $MemberPageContentModel->getCity();
        $states = $MemberPageContentModel->getStates();
        
        if(null !== $this->getDB()){
            $dbs = $this->getDB()->prepare('insert into about_page set theme = :theme, title = :title, 
                                            sub_title = :sub_title, skill_one = :skill_one, skill_two = :skill_two
                                            skill_three = :skill_three, job_title = :job_title, job_start_date = :job_start_date,
                                            job_end_date = :job_end_date, job_responsibilites = :job_responsibilites,
                                            school_name = :school_name, degree_program = :degree_program, degree_type = :degree_type, 
                                            degree_status = :degree_status, school_comments = :school_comments, summary = :summary,
                                            objective = :objective, git_url = :git_url, fb_url = :fb_url, linked_url = :linked_url
                                            phone = :phone, contact_email = :contact_email, city = :city, states = :states');
            $dbs ->bindParam(':theme', $theme, PDO::PARAM_STR);
            $dbs ->bindParam(':title', $title, PDO::PARAM_STR);
            $dbs ->bindParam(':sub_title', $sub_title, PDO::PARAM_STR);
            $dbs ->bindParam(':skill_one', $skill_one, PDO::PARAM_STR);
            $dbs ->bindParam(':skill_two', $skill_two, PDO::PARAM_STR);
            $dbs ->bindParam(':skill_three', $skill_three, PDO::PARAM_STR);
            $dbs ->bindParam(':job_title', $job_title, PDO::PARAM_STR);
            $dbs ->bindParam(':job_start_date', $job_start_date, PDO::PARAM_STR);
            $dbs ->bindParam(':job_end_date', $job_end_date, PDO::PARAM_STR);
            $dbs ->bindParam(':job_responsibilities', $job_responsibilities, PDO::PARAM_STR);
            $dbs ->bindParam(':school_name', $school_name, PDO::PARAM_STR);
            $dbs ->bindParam(':degree_program', $degree_program, PDO::PARAM_STR);
            $dbs ->bindParam(':degree_type', $degree_type, PDO::PARAM_STR);
            $dbs ->bindParam(':degree_status', $degree_status, PDO::PARAM_STR);
            $dbs ->bindParam(':school_comments', $school_comments, PDO::PARAM_STR);
            $dbs ->bindParam(':summary', $summary, PDO::PARAM_STR);
            $dbs ->bindParam(':objective', $objective, PDO::PARAM_STR);
            $dbs ->bindParam(':git_url', $git_url, PDO::PARAM_STR);
            $dbs ->bindParam(':fb_url', $fb_url, PDO::PARAM_STR);
            $dbs ->bindParam(':linked_url', $linked_url, PDO::PARAM_STR);
            $dbs ->bindParam(':phone', $phone, PDO::PARAM_STR);
            $dbs ->bindParam(':contact_email', $contact_email, PDO::PARAM_STR);
            $dbs ->bindParam(':city', $city, PDO::PARAM_STR);
            $dbs ->bindParam(':states', $states, PDO::PARAM_STR);
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = true;
            }
            
        }
        return $result;
    }
}
