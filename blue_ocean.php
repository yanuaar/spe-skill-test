<?php 

function findMissing( $a, $b, $n, $m) 
{ 
	for ( $i = 0; $i < $n; $i++) 
	{ 
		$j; 
		for ($j = 0; $j < $m; $j++) 
			if ($a[$i] == $b[$j]) 
				break; 

		if ($j == $m) 
			echo $a[$i] , " "; 
	} 
} 

$a = array( 1, 2, 3, 4, 6, 10 ); 
$b = array( 1); 
// $a = array( 1, 5, 5, 5, 5, 3 ); 
// $b = array(5); 
$n = count($a); 
$m = count($b); 
findMissing($a, $b, $n, $m); 

// This code is contributed by anuj_67. 
?> 
