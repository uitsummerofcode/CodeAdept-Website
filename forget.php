<?php
require 'connect.inc.php';
$username=$_POST['username'];
$query="INSERT INTO `forgot_password` (`ID`, `username`) VALUES (NULL, '$username')"
$query_run=mysqli_query($conn,$query);
if($query_run)
{
	echo "You will recieve a mail for your password";
}
else
{
	echo "Error in database";
}


?>