<?php 
function countDigit($narcissistic) 
{ 
	if ($n == 0) 
		return 0; 

	return (1 + countDigit($narcissistic / 10)); 
} 

function check( $narcissistic) 
{ 
	$l = countDigit($narcissistic); 
	$dup = $narcissistic; 
	$sum = 0; 

	while ($dup) 
	{ 
		$sum += pow($dup % 10, $l); 
		$dup = (int)$dup / 10; 
	} 

	return ($narcissistic == $sum); 
} 

$narcissistic = 153;
// $narcissistic = 111;

if (check(!$narcissistic)) 
	echo "true"; 
else
	echo "false"; 
 
?> 
