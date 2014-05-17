<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/landi.css" rel="stylesheet">
     <title>Update Page</title>
</head>
<body>
        <?php
        // put your code here
        
        Util::confirmAccess();
      
        
         $address = new AddressBook();
         
         
         if ( Util::isPostRequest() ) {
              
              $AddressbookModel = new AddressbookModel($_POST);
              
              if ( $address->update($AddressbookModel) ) {
                  echo '<p>Address updated</p>';
                  
              } else {
                   echo '<p>Address Could not update</p>';
              }
          }
         
         
         $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
         
         if ( !is_int($id) ) {
             Util::redirect('viewaddress');
         }
         
         $addressResult = $address->read($id);
          //print_r($addressResult);
          
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
      
    
        <div id="loginModal" class="modal show" tabindex="-1" tabindex="-1"
             role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">x</button>
                    <h1 class="text-center">Update</h1>
                </div>
                <div class="modal-body clearfix">
                    <form name="mainform" action="#" method="post"
                        class="form col-md-12 center-block">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control input-lg" 
                                   value="<?php echo $addressResult['name']; ?>"/>          
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control input-lg" 
                                   value="<?php echo $addressResult['address']; ?>"/> 
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control input-lg" 
                                   value="<?php echo $addressResult['city']; ?>"/>                            
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <select id="state" name="state"value="<?php echo $addressResult['state']; ?>"/>
                                <?php
                                if(count($state_list)){
                                    foreach($state_list as $value){
                                        echo '<option>',$value,'</option>';
                                        
                                    }
                                    
                                    }
                                    ?>
                            </select>   
                            
                                                               
                        </div>
                        <div class="form-group">
                            <label for="zip">Zip</label>
                            <input type="text" name="zip" class="form-control input-lg" 
                                   value="<?php echo $addressResult['zip']; ?>"/>                            
                        </div>
                        <div class="form-group">
                            <button type="submit" value="Submit" 
                                class="btn btn-primary btn-lg btn-block">Submit                                       
                            </button>
                            <input type="hidden" name="id" value="<?php echo $addressResult['id']; ?>"/>
                        </div>
                        
                    </form>
                    </div>
                    <div class="modal-footer">
                         
                       <button type="button" onClick="window.location='viewaddress.php';" 
                                class="btn-primary btn-lg btn-block">View Address Book</button>
                      
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
