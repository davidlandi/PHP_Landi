<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/landi.css" rel="stylesheet">
     <title>View</title>
</head>
    <body>
        <?php
        // put your code here
        
        if ( !isset($_SESSION['validcode']) || !$_SESSION['validcode'] ) {
           Util::redirect('index');
        }
        $address = new AddressBook();
        
        $addressResults = $address->read();
        
        ?>
        
       
        
           
          <div id="mainView">      
            <h1>View Address Book</h1>
            <div id="viewAb">
                <?php
                echo '<table border="1">'; 
                    echo '<tr><th>Index</th><th>Address</th>';
                    echo '<th>City</th><th>State</th><th>ZIP</th><th>name</th><th>Command</th></tr>';
                    foreach ($addressResults as $key => $value) {
                        echo '<tr>';
                         echo '<td>', $key ,'</td>';

                         echo '<td>', $value['address'] ,'</td>';
                         echo '<td>', $value['city'] ,'</td>';
                         echo '<td>', $value['state'] ,'</td>';          
                         echo '<td>', $value['zip'] ,'</td>';          
                         echo '<td>', $value['name'] ,'</td>';          
                         //echo '<td><a href="updateaddress.php?id=', $value['id'] ,'">Edit</a> </td>';         
                         echo '<td><form name="mainform" action="updateaddress.php" method="get"><input name="id" type="hidden" value="', $value['id'] ,'" /><input type="submit" value="Edit" /></form> </td>';     
                        echo '</tr>';
                    }
                    echo '</table>';
                ?>
               </div>  

                <button type="button" onClick="window.location='createPage.php';" 
                                        class="btn-primary btn-lg btn-block">Create New Record</button>
         </div>
    <script src="js//jquery.js"></script>		 
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>   
    </body>
</html>
