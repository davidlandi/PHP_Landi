<!DOCTYPE html>
<!--
Lab creating table 100 rows alternate silver display row number and date 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
        <?php
        $amountOfRows = array(100); // create array for 100 rows
        $count = 0; //counter to keep track of amount 
        $dateForTable = date("m d y"); // month day year 
        $rowColor = 1;// will determine what color for row 
        
        for($i =0; $i < 100; $i++){ // for loop to create 100 rows
            $count++; // increment counter
            if ($rowColor == 1){
                echo '<tr bgcolor="">';
                echo "<td>'$count'</td>   <td>'$dateForTable'</td>";
                echo '</tr>';
                $rowColor = 2;//set value to 2 next time through the for loop color will be gray
            }
            else{
               echo '<tr bgcolor="gray">';
                echo "<td>'$count'</td>   <td>'$dateForTable'</td>";
                echo '</tr>'; 
                $rowColor = 1;//set back to 1 so next time row will be white
            }
            }
                
                
       
        ?>
        </table>
    </body>
</html>
