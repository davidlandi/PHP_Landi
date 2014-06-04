<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserContent
 *
 * @author David
 */
class UserContent {
    
  public function create($UserContentModel){
        $result = false;
        
        $title = $UserContentModel->getTitle();
        $theme = $UserContentModel->getTheme();
        $address = $UserContentModel->getAddress();
        $phone = $UserContentModel->getPhone();
        $email = $UserContentModel->getEmail();
        $content = $UserContentModel->getContent();
       
        
        if(null !== $this->getDB() && $UserContentModel instanceof SignupModel){
            
            $dbs = $this->getDB()->prepare('insert into about_page set title = :title, theme = :theme, address = :address, phone = :phone, email = :email, content = :content');
            $dbs ->bindParam(':title', $title, PDO::PARAM_STR);
            $dbs ->bindParam(':theme', $theme, PDO::PARAM_STR);
            $dbs ->bindParam(':address',$address, PDO::PARAM_STR);
            $dbs ->bindParam(':phone', $phone, PDO::PARAM_STR);
            $dbs ->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs ->bindParam(':content', $content, PDO::PARAM_STR);
            
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = true;
            }
            
        }
        return $result;
    }
    
    


    
    
}

