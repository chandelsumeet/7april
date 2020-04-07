<?php

session_start();




		
        

function check()
{
	include("db.php");

	if(isset($_POST['submit']))
	{

		$username=$_POST['username'];
		$password=$_POST['password'];

		if(strlen($username)==0 || strlen($password)==0)
		{
			
			echo "username and password can't be empty";

		}
		else
		{
			$query="SELECT * FROM user";
			$result=$conn->query($query);

			while($row = $result->fetch_assoc())
			{
				$checkuser=$row['username'];
				$checkpass=$row['password'];

				if($checkuser==$username and $checkpass==$password)
				{
					login();
					
					
				}
				
			}
			echo "username and password not in database";

		}
	}

}


function login()
{
$_SESSION["user"]="sumeet";


$user="cookie1";
$value=$_SESSION["user"];
$expire= time() + (60*60);
setcookie($user,$value,$expire);
header("location:login.php");

}








?>