<?php

/**
 * Description of NewMemberSignUp
 *
 * @author David
 */
class NewMemberSignUp extends DB {
    
    public function __construct(){
        $this->setDb();
    }
    public function addNewMember(AddNewMemberModel $dataModel){
        $result = false;
        
        $email = $dataModel->getEmail();
        $website = $dataModel->getWebsiteName();
        $password = sha1($dataModel->getPassword());
        
        if(null !== $this->getDB()){
            $dbs = $this->getDB()->prepare('insert into users set website = :website, email = :email, password = :password');
            $dbs ->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs ->bindParam(':website', $website, PDO::PARAM_STR);
            $dbs ->bindParam(':password', $password, PDO::PARAM_STR);
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = intval($this->getDB()->lastInsertId());
            }
        }
        return $result;
    }
    
    
}
