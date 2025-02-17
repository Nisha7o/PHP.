<?php
	$sub = array("C","C++","DBMS","PHP");
	
	$n = count($sub);
	echo "<b>Array using for loop<br></b>";
	
	for($i=0;$i<$n;$i++)
	{
		echo $sub[$i];
		echo "<br>";
	}
?>

<?php
	echo "<br>";
	$sub = array("C","C++","DBMS","PHP");
	
	echo "<b>Array using foreach loop<br></b>";
	
	foreach($sub as $value)
	{
		echo "$value <br>";
	}
?>