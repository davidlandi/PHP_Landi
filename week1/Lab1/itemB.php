
<!--
b.	Go to php.net and search what they do. Have a sample in your code.
i.	array_count_values, array_flip, array_key_exists, array_map, array_rand, array_push, in_array, shuffle, count/sizeof, sort, in_array

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //array_count_values
        //array_count_values — Counts all the values of an array
        //array array_count_values ( array $array )
        //array_count_values() returns an array using the values of array as keys and their frequency in array as values. 
        
        //example
        $array = array( "hello",  "world", "hello");
        print_r(array_count_values($array));
        ?>
        
        <?php
        //array_flip
        //array_flip — Exchanges all keys with their associated values in an array
        //array array_flip ( array $array )
        //array_flip() returns an array in flip order, i.e. keys from array become values and values from array become keys. 
        
        //example
        $trans = array("a" => 1, "b" => 1, "c" => 2);
        $trans1 = array_flip($trans);
         print_r($trans);
        ?>
        
        <?php
        //array_key_exists
        //Checks if the given key or index exists in the array
        //bool array_key_exists ( mixed $key , array $array )
        //array_key_exists() returns TRUE if the given key is set in the array. key can be any value possible for an array index. 
        
        //example
        $search = array('first' => 1, 'second' => 4);
        if (array_key_exists('first', $search_array)) {
        echo "The 'first' element is in the array";
}
        
        ?>
        
        <?php
        //array_map
        //Applies the callback to the elements of the given arrays
        //array array_map ( callable $callback , array $array1 [, array $... ] )
        //array_map() returns an array containing all the elements of array1 after applying the callback function to each one.
        
        
        //example
        function cube($n){
        return($n * $n * $n);
}

        $a = array(1, 2, 3, 4, 5);
        $b = array_map("cube", $a);
        print_r($b);
        ?>
        
        <?php
        //array_rand
        //Pick one or more random entries out of an array
        //mixed array_rand ( array $array [, int $num = 1 ] )
        
        //example
        $colors = array("red","geen","blue","pink","yellow");
        $randomColors = array_rand($colors,2);
        echo $colors[$randomColors[0]]. "\n";
        echo $colors[$randomColors[3]]. "\n"; 
        ?>
        <?php
        //array_push
        //Push one or more elements onto the end of array
        //int array_push ( array &$array , mixed $value1 [, mixed $... ] )
        //array_push() treats array as a stack, and pushes the passed variables onto the end of array. 
        
        //example
        $stack = array("orange", "banana");
         array_push($stack, "apple", "raspberry");
         print_r($stack);
        ?>
       
        <?php
         //in_array
        //Checks if a value exists in an array
        //bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )
        $os = array("Mac", "NT", "Irix", "Linux");
        if (in_array("Irix", $os)) {
            echo "Got Irix";
        }
        if (in_array("mac", $os)) {
            echo "Got mac";
        }
        ?>
         <?php
        // shuffle
        $numbers = range(1, 20);
        shuffle($numbers);
        foreach ($numbers as $number) {
            echo "$number ";
        }
        ?>
        <?php
        // count
        $a[0] = 1;
        $a[1] = 3;
        $a[2] = 5;
        $result = count($a);
        $b[0] = 7;
        $b[5] = 9;
        $b[10] = 11;
        $result = count($b);
        $result = count(null);
        $result = count(false);
        
        ?>
        <?php
        // sort
        $fruits = array("lemon", "orange", "banana", "apple");
        sort($fruits);
        foreach ($fruits as $key => $val) {
        echo "fruits[" . $key . "] = " . $val . "\n";
        }

        ?>
        
    </body>
</html>
