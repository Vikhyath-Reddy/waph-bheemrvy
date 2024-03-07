<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
	if (isset($username) and isset($password)){
		//echo "Debug> got username=$username;password=$password";
		if(addnewuser($username,$password))
	{
		echo "Registration succeeded!";
	}
	else
	{
		echo "Registration failed!";
	}
	}else {
		echo "No username/password provided!";
	}
	
	function addnewuser($username,$password)
	{
		$mysqli = new mysqli('localhost','bheemrvy','Pa$$w0rd','waph');
		if($mysqli->connect_errno)
		{
			printf("Database connection failed: %s\n", $mysqli->connect_error);
			return FALSE;
		}

		$prepared_sql = "INSERT INTO users (username,password) VALUES (?,md5(?));";
		//$sql = $sql . " AND password = md5('". $password."')";
		//echo "DEBUG > sql= $sql";
		$stmt=$mysqli->prepare($prepared_sql);
		$stmt->bind_param("ss",$username,$password);
		if($stmt->execute()) return TRUE;
		return FALSE;
	}
?>
