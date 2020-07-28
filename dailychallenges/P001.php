<?php 

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
