<?php
	$emp = array(
		array(1,"C",4000),
		array(2,"C++",5000),
		array(3,"JAVA",8000)
		);
	for($row=0; $row<3; $row++)
	{
		for($col=0; $col<3; $col++)
		{
			echo $emp[$row][$col]." ";
		}
		echo "<br/>";
	}
?>