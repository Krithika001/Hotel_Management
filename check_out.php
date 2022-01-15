<?php
$id = filter_input(INPUT_POST, 'id');
$name= filter_input(INPUT_POST, 'name');
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
			$sql = "DELETE FROM checked where id='$id'";
			if($conn->query($sql))
			{
				echo "Deleted!!!";
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
