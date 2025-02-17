<?php
	function xyz()
	{
		$a='Hello ';
		$b='world';
		$c=$a.$b;
		
		echo "$c<br>";
	}
	
	function abc($fname,$lname)
	{
		$a=$fname;
		$b=$lname;
		$c=$a.$b;
		
		echo "$c";
	}
	
	xyz();
	abc('Nisha ','Panchal');
?>