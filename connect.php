<?php
$username = filter_input(INPUT_POST, 'username');
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$type = filter_input(INPUT_POST, 'type');
$password = filter_input(INPUT_POST, 'password');
if(!empty($id))
{
	if(!empty($name))
	{
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "hotel_db";
		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
		if(mysqli_connect_error())
		{
			die("Connect Error (".mysqli_connect_errno().")".mysqli_connect_error());
		}
		else
		{
			$sql = "INSERT INTO users (id, name, password, type, username) values('$id','$name','$password','$type','$username')";
			if($conn->query($sql))
			{
				echo "Inserted";
			}
			else
			{
				echo "Error : ".$sql."</br>".$conn->error;
			}
			$conn->close();
		}
	}
	else
	{
		echo "Name should not be empty";
		die();
	}
}
else
{
	echo "ID shouldn't be empty";
	die();
}
?>
