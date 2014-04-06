
<!--
This assignment is used to explore how PHP works and processes.  There various small task that can be completed.
a.	Go to php.net and search what they do. Have a sample in your code.
i.	Explode, sha1, htmlentities, md5, strip_tags, trim, ucwords, strlen, str_shuffle, ord

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
 //#########################################################################################
        //EXPLODE FUNCTION
        //array explode ( string $delimiter , string $string [, int $limit ] )
        
        // EXAMPLE1
//        $car = "motor tire brakes transmission battery alternator";
//        $parts = explode(" ",$car);
//        echo $parts[4].","." ";
//        echo $parts[0].","." ";
//        echo $parts[5].","." ";
//        
//        //EXAMPLE2
//        $data = "DLandi:*:1023:1000::/home/foo:/bin/sh";
//        list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
//        echo $user;
//        echo $pass;
//#########################################################################################
        //SHA1 FUNCTION
        //sha1 — Calculate the sha1 hash of a string
        //string sha1 ( string $str [, bool $raw_output = false ] )
        
        //EXAMPLE
//       if(shal($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940'){
//           echo "Would you like a green or red apple?";
//       }

//#########################################################################################
       //HTMLENTITIES FUNCTION
       //htmlentities — Convert all applicable characters to HTML entities
       
       //EXAMPLE
//       $str = "A 'quote' is <b>bold</b>";
//       echo htmlentities($str);
//       echo htmlentities($str, ENT_QUOTES);
       
       //EXAMPLE2
//       $str = "\x8F!!!";
//       echo htmlentities($str, ENT_QUOTES, "UTF-8");
//       echo htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8");
 //#########################################################################################
       //MD5 FUNCTION
       //md5 — Calculate the md5 hash of a string
       //string md5 ( string $str [, bool $raw_output = false ] )
       
       //EXAMPLE
//       $str = 'apple';
//
//        if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
//        echo "Would you like a green or red apple?";
//        
//        }
//#########################################################################################
        //STRIP_TAGS FUNCTION
        //string strip_tags ( string $str [, string $allowable_tags ] )
        //This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given str. It uses the same tag stripping state machine as the fgetss() function.
        
        //EXAMPLE
//        $text = '<p>this text has html tags remove them now</p>';
//        echo strip_tags($text);
//        echo "\n";
//        echo strip_tags($text, '<p>');
//#########################################################################################
        //TRIM FUNCTION
        //trim — Strip whitespace (or other characters) from the beginning and end of a string
        //string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )
//        $text   = "\t\tThese are a few words :) ...  ";
//        $binary = "\x09Example string\x0A";
//        $hello  = "Hello World";
//        var_dump($text, $binary, $hello);
//
//        print "\n";

//        $trimmed = trim($text);
//        var_dump($trimmed);
//
//        $trimmed = trim($text, " \t.");
//        var_dump($trimmed);
//
//        $trimmed = trim($hello, "Hdle");
//        var_dump($trimmed);

//        $trimmed = trim($hello, 'HdWr');
//        var_dump($trimmed);

        // trim the ASCII control characters at the beginning and end of $binary
        // (from 0 to 31 inclusive)
//        $clean = trim($binary, "\x00..\x1F");
//        var_dump($clean);
//#########################################################################################
        //UCWORDS
        //ucwords — Uppercase the first character of each word in a string
        //string ucwords ( string $str )
        
        //EXAMPLE
//        $name = 'david landi';
//        $correctName = ucwords($name);
//        $statement = 'i am using php';
//        $allCap = ucwords($statement);
//        $correct = (strtolower($statement));
//#########################################################################################
        //STRLEN
        //strlen — Get string length
        //int strlen ( string $string )
        //Returns the length of the given string.
        
        //EXAMPLE
//        $length = 'david';
//        if (strlen($length) == 6){
//            echo $length;
//            echo strlen($length);
//            
//        }
//#########################################################################################        
     
        //str_shuffle
        //str_shuffle — Randomly shuffles a string
        //string str_shuffle ( string $str )
//        $numbers = '123456789';
//        $mixThemUp = str_shuffle($numbers);
//        echo $mixThemUp;
//#########################################################################################
        //ord
        //ord — Return ASCII value of character
        //int ord ( string $string )
        //Returns the ASCII value of the first character of string. 
        
            $str = "\n";
            if (ord($str) == 10) {
            echo "The first character of \$str is a line feed.\n";
}
        
       ?>
    </body>
</html>
