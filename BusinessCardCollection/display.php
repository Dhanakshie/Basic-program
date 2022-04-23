<!DOCTYPE html>
<html>
<head>
	<title>My Contacts</title>
	<link rel="stylesheet" type="text/css" href="css/display.css">
</head>
<body>
	<?php

	include('conn.php');

	$sqlget = "SELECT * FROM Business_card";
	$sqldata = mysqli_query($conn, $sqlget) or die('error');

	echo "<table>";
	echo "<tr><th>Name</th><th>Profession</th><th>Email</th><th>PhoneNo</th><th>WebSite</th><th>Billing_name</th><th>Billing_number</th><th>Billing_street</th><th>Billing_city</th></tr>";

	while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		echo "<tr><td>";
		echo $row['Name'];
		echo "</td><td>";
		echo $row['Profession'];
		echo "</td><td>";
		echo $row['Email'];
		echo "</td><td>";
		echo $row['PhoneNo'];
		echo "</td><td>";
		echo $row['WebSite'];
		echo "</td><td>";
		echo $row['Billing_name'];
		echo "</td><td>";
		echo $row['Billing_number'];
		echo "</td><td>";
		echo $row['Billing_street'];
		echo "</td><td>";
		echo $row['Billing_city'];
		echo "</td></tr>";
	}

	echo "</table>";



	?>

</body>
</html>