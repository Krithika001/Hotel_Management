<?php
$id = filter_input(INPUT_POST, 'id');
$name= filter_input(INPUT_POST, 'name');
$status=filter_input(INPUT_POST, 'status');
$room_status='1';
$room_id=filter_input(INPUT_POST, 'room_id');
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
			$sql = "UPDATE checked SET status='$status' where id='$id'";
			$sqli="UPDATE rooms SET status='$room_status' where id='$room_id'";
			if($conn->query($sql)&&$conn->query($sqli))
			{
				echo "Status updated!!!";
			}
			else
			{
				echo "Error : ".$sql."</br>".$conn->error;
				echo "Error : ".$sqli."</br>".$conn->error;
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
