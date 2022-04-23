<?php

$name = $_POST['Name'];
$prof = $_POST['profession'];
$email = $_POST['Email'];
$pnum = $_POST['phone_number'];
$web = $_POST['Website'];
$bname = $_POST['Billing_name'];
$bno = $_POST['Billing_Number'];
$bstr = $_POST['Billing_street'];
$bcity = $_POST['Billing_City'];

if (!empty($name) && !empty($prof) && !empty($email) && !empty($pnum) && !empty($web) && !empty($bname) && !empty($bno) && !empty($bstr) && !empty($bcity)){

	$con = mysqli_connect('localhost', 'root', '', 'Contacts');
	if($con){
		$query = "INSERT INTO Business_Card (Name, Profession, Email, PhoneNo, WebSite, Billing_name, Billing_number, Billing_street, Billing_city) VALUES ('$name', '$prof', '$email', '$pnum', '$web', '$bname', '$bno', '$bstr', '$bcity')";
		if(mysqli_query($con, $query)){
			echo '<script language ="javascript">';
			echo 'alert("Contact Added Successfully")';
			echo '</script>';
		}
		else{echo '<script language ="javascript">';
			echo 'alert("Contact Added Unsuccessful")';
			echo '</script>';}

	}
	else{

		    echo '<script language ="javascript">';
			echo 'alert("Connection Failed")';
			echo '</script>';
	}

}
else{
	echo '<script language ="javascript">';
			echo 'alert("All fields are requeired")';
			echo '</script>';
}


?>