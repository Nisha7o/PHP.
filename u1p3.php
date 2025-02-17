<?php
	$a=10;
	$b=5;
	
	if($a>$b)
	{
		echo "a is max";
	}
	else
	{
		echo "b is max";
	}
?>

<?php

	echo "<br><br>";
	$fvcolor="red";
	
	switch($fvcolor)
	{
		case "red":
			echo "fvcolor is red";
			break;
		case "blue":
			echo "fvcolor is blue";
			break;
		default:
			echo "invalid choice";
	}
?>