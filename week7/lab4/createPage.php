<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
Landi lab 4
-->
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/landi.css" rel="stylesheet">
     <title>New Record</title>
</head>
<body>
<!-- .......................... PHP section ................................ -->        
    <?php
    Util::confirmAccess(); 
    
    $address = new AddressBook();
    
    if(Util::isPostRequest()){
        $AddressbookModel = new AddressbookModel($_POST);
        
        if($address->create($AddressbookModel)){
            echo '<p>Record has been added</p>';
        }
        else{
            echo '<p>Record cant be added</p>';
            
        }
    }
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
    ?>
<!-- ....................................................................... -->
<!-- .......................... Main content ............................... -->
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h1 class="text-center">Add New Record</h1>
                </div>
                <div class="modal-body clearfix">
                    <form name="mainform" action="#" method="post" class="col-md-12 center-block">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="" class="form-control input-lg"/>          
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="" class="form-control input-lg"/> 
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" value="" class="form-control input-lg"/>                            
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
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
                            <label for="zip">Zip</label>
                            <input type="text" name="zip" value="" class="form-control input-lg"/>                            
                        </div>
                        <div class="form-group">
                            <button type="submit" value="Submit" 
                                class="btn btn-primary btn-lg btn-block">Submit                                       
                            </button>
                            
                        </div>                       
                    </form>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                           <button type="button" onClick="window.location='viewaddress.php';" 
                                   class="btn-primary btn-lg btn-block">View Address Book</button> 
                        </div>
                    </div>              
            </div>
        </div>
    </div>
<!-- ....................................................................... -->

    <script src="js//jquery.js"></script>		 
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
