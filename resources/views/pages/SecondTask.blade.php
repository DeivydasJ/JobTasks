<?php
$a = array(4,2,4,7,1,6,2,8);
$len = count($a);
$sum = array_sum($a);
$num_chunks = 3;
$arrays = 3;
$k = 0;
array_multisort($a, SORT_DESC); 
for($i=0; $i< $arrays; $i++){
    $sets[$i] = array();
    
    for($j=0; $j < $len; $j++){
        if(array_sum($sets[$i]) +($a[$j])<= intdiv($sum, $num_chunks)){  
           array_push($sets[$i], ($a[$j]));
            unset($a[$j]);
            $k = $k + 1;   
        }
                                }
if($k > 0){
   $len = $len - $k; 
   $k = 0;
            }
$a = array_values($a);
$sum = ($sum - intdiv($sum, $num_chunks));
$num_chunks = $num_chunks - 1;

echo '<pre>';                       }
print_r($sets);

?>