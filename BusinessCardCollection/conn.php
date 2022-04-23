<?php

$conn=mysqli_connect('localhost', 'root', '', 'contacts');
if(!$conn){
	die("Connection Failed.". mysqli_connect_error());
}

?>