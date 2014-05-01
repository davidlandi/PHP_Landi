<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <title></title>
    </head>
    <body>
        <?php
//        // put your code here
//                
//            $signup = new Signup();
//            
//            if ( $signup->isPostRequest()  ) {
//                 
//                if ( $signup->entryIsValid() ) {
//                    echo '<div class="success">All fields are good</div>';
//                } else {
//                  print_r($signup->getErrors());
//                }
//            }
//          
//        ?>
        <form name="mainFrm" id="mainFrm" action="">
            <fieldset>
                <legend>Contact info</legend>
                <ul>
                    <li>
                        <label for="txtFname">First Name:</label>
                        <input type="text" id="txtFname" name="txtFname"/>
                    </li>
                    <li>
                        <label for="txtName">Last Name:</label>
                        <input type="text" id="txtLname" name="txtLname"/>
                    </li>
                    <li>
                        <select>
                            <option value=""></option>
                        </select>
                    </li>
                    <li>
                        <label for="txtTelephone">Telephone:</label>
                        <input type="text" id="txtTelephone" name="txtTelephone"/>
                    </li>
                    
                </ul>
                
                
            </fieldset>
            
        </form>
            
    </body>
</html>
