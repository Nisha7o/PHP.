<?php
	$a = array(12,52,85,74,35,35,85,52,69,69,45,12,69,12,85);
	$val = array_count_values($a);
	
	echo 'no of non duplicate items:'.count($val).'<br><br>';
	
	print_r($val);
?>