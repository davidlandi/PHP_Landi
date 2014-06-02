<?php

/**
 * Description of NewMemberSignUp
 *
 * @author David
 */
class SignUp extends DB {
        
    function __construct(){
        $this->setDb();
    }
    
    public function create($SignUpModel){
        $result = false;

        if(null !== $this->getDB() && $SignUpModel instanceof SignUpModel){
            $dbs = $this->getDB()->prepare('insert into users set website = :website, email = :email, password = :password');
            $dbs ->bindParam(':website', $SignUpModel->website, PDO::PARAM_STR);
            $dbs ->bindParam(':email', $SignUpModel->email, PDO::PARAM_STR);
            $dbs ->bindParam(':password', $SignUpModel->password, PDO::PARAM_STR);
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = true;
            }
        }
        return $result;
    }   
}
