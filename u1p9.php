<?php
	echo "Numeric Array in asceding order:<br>";
	$numbers=array(40,5,36,79,85,15,4);
	
	sort($numbers);
	$n=count($numbers);
	
	for($x=0; $x<$n; $x++)
	{
		echo $numbers[$x];
		echo "<br>";
	}
	
	echo "Numeric array in desceding order:<br>";
	$numbers=array(7,52,98,623,5,25,52);
	rsort($numbers);
	
	$arrlength=count($numbers);
	for($x=0; $x<$arrlength; $x++)
	{
		echo $numbers[$x];
		echo "<br>";
	}
?>