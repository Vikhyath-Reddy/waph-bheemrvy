<?php 
	if(empty($_REQUEST['data']))
	{
		exit("Please enter the input field data");
	}
	$input=htmlentities($_REQUEST["data"]);
	echo("The input from the request is <strong>".$input."</strong>.<br>");
?>	