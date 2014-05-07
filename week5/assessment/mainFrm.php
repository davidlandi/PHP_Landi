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
    
    <form name="mainFrm" action="#" method="post">
        <fieldset>
            <legend>Comments</legend>
            
            <ul>
                <li>
                <label for="name">Name</label>
            <input id="name" type="text" name="name"/>
                </li>
                <li>
            <label for="state">State</label>
            <select id="state" name="state">
                <?php
                if(count($state_list)){
                    foreach($state_list as $value){
                        echo '<option>',$value,'</option>';
                    }
                }
                ?>
            </select>
                </li>
                <li>
            <label for="comments">Comments</label>
            <textarea id="posting" type="text" name="comments" rows="10" cols="50">
            </textarea>
                </li>
                <li>
            <label for="posting">Your Post</label>
            <textarea id="posting" type="text" name="posting" rows="10" cols="50">
                <?php
                echo $signup ->name,"\n",
                     $signup->state,"\n",
                     $signup->comments;
                ?>
            </textarea>
                </li>
            </ul>
            
            <input type="submit" value="Submit"/>
        </fieldset>
    </form>
</body>
</html>
