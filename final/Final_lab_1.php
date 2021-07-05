<?php
session_start();
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	$hasError=false;

	$users= array("shuvo"=>"1234","sabbir"=>"1234","karim"=>"456","rahim"=>"789");
	
if	($_SERVER["REQUEST_METHOD"]=="POST")

{
     if(empty($_POST["username"]))
{
			$hasError = true;
			$err_username = "username Required";
		
}
	
			else
			{
				$username=$_POST["username"];
			}

         
if(empty($_POST["password"]))
{
			$hasError = true;
			$err_password = "Password Required";
		
}
		else
			{
				$password=$_POST["password"];
			}

			if (!$hasError) {
				
				foreach ($users as $u => $p) {


					if ($username==$u && $password==$p)
					{

					$_SESSION["loggeduser"] = $username;

					header("Location: dashboard.php");
						
				}

				 
				

				echo"invalid info";

			}

}


	?>

	<html>
	<body>
		<center>
		<form action="" method="post">
				
				Username:<input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span><br>
				
				Password:<input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?><span><br>
			
      
				<input type="Submit" name="submit" value="Log_in">
				
	
		</form>
		</center>
	</body>
	</html>