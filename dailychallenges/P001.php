<?php 

/********/
/*
Problem asked by Google get from daily challenges.

Given a list of numbers and a number k, return whether any two numbers from the list add up to k.

For example, given [10, 15, 3, 7] and k of 17, return true since 10 + 7 is 17.

Bonus: Can you do this in one pass?

*/

function numbersAddUp($arr, $n){
    
    for ($i=0; $i<count($arr); $i++){
      
        
        for ($j= $i+1; $j<count($arr); $j++){
           
            
            if (($arr[$i] + $arr[$j]) == $n){
                return "true";
            }
        
        }
       
    }
    return "false";
    
}
$arr = [10, 15, 3, 6, 17, 1, 11];
$n = 9;


echo numbersAddUp($arr, $n) . "\n";

?>
