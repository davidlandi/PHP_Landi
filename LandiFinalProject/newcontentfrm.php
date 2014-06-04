<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
Landi updated assessment
-->
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/landi.css" rel="stylesheet">
    <title></title>
</head>
<body>
    <?php
    $content = new UserContent();
        
        if(Util::isPostRequest()){
            $UserContentModel = new UserContentModel($_POST);
            
            if($content->create($SignupModel)){
                echo '<p>New member has been added</p>';
            
                
            }
            else{echo '<p>Error. New member could not be added.</p>';}
        }
        
    ?>
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h1 class="text-center">Comments</h1>
                    
                </div>
                <div class="modal-body clearfix">
                    <form name="mainform" action="#" method="post" class="col-md-12 center-block">
                        <div class="form-group">
                            
                            <input type="text" name="title" class="form-control input-lg" placeholder="title" maxlength="40"/> 
                            
                        </div>
                        <div class="form-group">
                            <select id="theme" name="theme" >
                                
                                      <option value=themeOne>ThemeOne</option>
                                      <option value=themeTwo>ThemeTwo</option> 
                                      <option value=themeThree>ThemeThree</option> 
                               
                            </select> 
                            <input type="text" name="address" class="form-control input-lg" placeholder="address" maxlength="40"/>
                            <input type="text" name="title" class="form-control input-lg" placeholder="phone" maxlength="40"/>
                            <input type="text" name="title" class="form-control input-lg" placeholder="email" maxlength="40"/>
                            <input type="text" name="title" class="form-control input-lg" placeholder="title" maxlength="40"/>
                            <input type="text" name="title" class="form-control input-lg" placeholder="title" maxlength="40"/>
                            
                        </div>
                        <div class="form-group">
                            
                            <input class="form-control input-lg" name="content" type="text" placeholder="Your Comments" maxlength="60"/>                            
                        </div>
                        <div class="form-group">
                            <button type="submit" value="Submit" 
                                class="btn btn-primary btn-lg btn-block">Submit                                       
                            </button>
                            
                        </div>                       
                    </form>
                    
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12 text-center">
                
                        </div>
                    </div>              
            </div>
        </div>
    </div>
    
    
    
    <script src="js//jquery.js"></script>		 
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>