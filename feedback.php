<?php
require 'connect.inc.php';
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['feedback']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];
	if(!empty($name)&&!empty($email)&&!empty($feedback))
	{
		$query="INSERT INTO `feedback` (`ID`, `Name`, `E-Mail`, `Feedback`) VALUES (NULL, '$name','$email','$feedback')";
		$query_run=mysqli_query($conn,$query);
		if($query_run)
		{
			echo "<script> var r = confirm('Thank you for your feedback!');
			if (r == true) {
    		window.open('contact.html','_self')
			} else {
    		window.open('contact.html','_self');
			}</script>";
		}
		else{
			echo "Please fill all the details";
		}
	
	}
}



?>