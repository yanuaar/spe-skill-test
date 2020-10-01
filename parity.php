<?php 
 
function getParity( $n) 
{ 
	$parity = 0; 
	while ($n) 
	{ 
		$parity = !$parity; 
		$n = $n & ($n - 1); 
	} 
	return $parity; 
} 

    $n = 11; //odd
    // $n = 160; //even
    
    echo "Parity no ",$n ," the only " , 
		getParity($n)? "odd": "even";  
?> 