<?php

/**
 * Description of Member
 *This class 
 * @author David
 */
class Member extends DB {
    
    /**
     * Constructor
     */
    function __construct(){
        $this->setDB();
    }
    
    public function createMember($MemberTemp){
        $result = false;
        
        if(null !== $this->getDB() && $MemberTemp instanceof MemberTemp){
            $dbs = $this->getDB()->prepare('insert into users set website = :website, email = :email, password = :password');
            $dbs->bindParam(':website', $MemberTemp->website, PDO::PARAM_STR);
            $dbs->bindParam(':email', $MemberTemp->email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $MemberTemp->password, PDO::PARAM_STR);
        }
        if($dbs->execute() && $dbs->rowCount() > 0){
            $result = true;
        }
        return $result;
    } 
    
    
}
