<?php 

function listFunction(){
$firstList = 4;
$secondList = 5;

// This loop is forming the first sublist inside the unordered list that starts in html on line 5
// It also ends the list inside the loop at the end of each iteration
// It creates the unordered list that the next loop will fill with sublist items as it runs the loop inside
 
for ($i = 1; $i <= $firstList; $i++){ 
    echo "<ul> 
    <li>$i</li> " ;
        //this loop creates our second sublist and populates the unordered list made in the outer loop 

    for ($j = 1;$j <= $secondList; $j++){
        echo " <ul>
        <li> $j </li> 
        
               </ul>";
   }
    ;
         //closes the unordered list that holds the loop above inside that creates the sublist items.

   echo " </ul> 
   " 
   ; 

}
}    
	
	

?>
<!DOCTYPE html>
<html>

<body>
 <?php echo listFunction(); ?>
     <body>
</html>
