<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>User Details</title>
</head>
<body>
<div class="headingsContainer">
            <h3>Passsword Status</h3>
        </div>
	<form>
<?php
	require "session_auth.php";
	$username = $_SESSION['username'];
	$password = $_REQUEST["newpassword"];
	$token=$_POST["nocsrftoken"];
	if(!isset($token) or ($token!==$_SESSION["nocsrftoken"]))
	{
		echo "CSRF Attack is detected";
		die();
	}
	if(isset($username) and isset($password))
	{
		
		if(changepassword($username,$password))
		{
            ?>
            <div class="mainContainer">
            <h2>Password has been changed!!! for <?php echo htmlentities($username);?>!</h2>

			<p class="register"> <a href="logout.php">Logout</a></p>
             </div>
            <?php
		}
		else
		{
			?>
            <div class="mainContainer">
            <h2>Change password failed!!!! for <?php echo htmlentities($username);?>!</h2>
            
	<p class="register"> <a href="logout.php">Logout</a></p>
             </div>
            <?php
		}
	}
	else
	{
		?>
            <div class="mainContainer">
            <?php echo "No username/password provided!";?>!
             </div>
            <?php
		
	}
	

	function changepassword($username,$password)
	{
		$mysqli = new mysqli('localhost','bopparsr','Shruti@123','waph');
		if($mysqli->connect_errno)
		{
			printf("Database connection failed: %s\n", $mysqli->connect_error);
			exit();
		}

		$sql = "UPDATE users SET password=md5(?) WHERE username=?;";
		$stmt=$mysqli->prepare($sql);
		$stmt->bind_param("ss",$password,$username);
		if($stmt->execute())
			return TRUE;
		return FALSE;
	}

	$token.die();
	?>
	</form>
    </div>
   </body>
</html>
