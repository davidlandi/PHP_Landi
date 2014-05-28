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
    $signup = new Signup();
        
        $state_list = array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
        class Signup{
            public $name;
            public $state;
            public $comments;
            
            public function __construct() {
                $this ->name = filter_input(INPUT_POST, 'name');
                $this ->state = filter_input(INPUT_POST, 'state');
                $this ->comments = filter_input(INPUT_POST, 'comments');
            }
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
                            
                            <input type="text" name="name" class="form-control input-lg" placeholder="name" maxlength="40"/>          
                        </div>
                        <div class="form-group">
                            <select id="state" name="state" >
                                <?php
                                if(count($state_list)){
                                    foreach($state_list as $key => $value){
                                        echo '<option value="'.$key.'">',$value,'</option>';                               
                                    } 
                                    
                                    }
                                    ?>
                            </select>                           
                        </div>
                        <div class="form-group">
                            
                            <input class="form-control input-lg" name="comments" type="text" placeholder="Your Comments" maxlength="60"/>                            
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
                            <h2>Saved Comments</h2>
                           <?php
                        if(Util::isPostRequest()){
                            echo    date('l F jS\, Y h:i A'), "\n",
                                    $signup->name, "\n",
                                    $signup->state, "\n\n",
                                    $signup->comments;
                                    
                        }
                    ?> 
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