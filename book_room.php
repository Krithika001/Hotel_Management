<?php
$booked_cid = filter_input(INPUT_POST, 'booked_cid');
$contact_no = filter_input(INPUT_POST, 'contact_no');
$date_in = filter_input(INPUT_POST, 'date_in');
$date_out = filter_input(INPUT_POST, 'date_out');
$date_update = filter_input(INPUT_POST, 'date_update');
$id = filter_input(INPUT_POST, 'id');
$name= filter_input(INPUT_POST, 'name');
$ref_no = filter_input(INPUT_POST, 'ref_no');
$room_id = filter_input(INPUT_POST, 'room_id');
$status = '0';

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
			$sql = "INSERT INTO checked (booked_cid, contact_no, date_in, date_out, date_updated,id,name,ref_no,room_id,status) values('$booked_cid','$contact_no','$date_in','$date_out','$date_update','$id','$name','$ref_no','$room_id','$status')";
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
