<?php
$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "hotel_db";
		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
		if(mysqli_connect_error())
		{
			die("Connect Error (".mysqli_connect_errno().")".mysqli_connect_error());
		}
?>
<html>
<head>
	<title> Welcome to AK Hotel </title>
</head>
<body>
<?php	
	$sql="SELECT * FROM room_categories";
	$res=mysqli_query($conn,$sql);
	if(!$res)
	{
		die("Query Failed!");
	}
	while($row=mysqli_fetch_row($res))
	{
		var_dump($row);
		echo"<br /><hr /><br />";
	}
	mysqli_free_result($res);
?>
</body>
</html>
<?php	
	mysqli_close($conn)
?>