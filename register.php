<?php
require 'connect.inc.php';
if(isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['password'])&&isset($_POST['number'])&&isset($_POST['email'])&&isset($_POST['username'])&&isset($_POST['semester'])&&isset($_POST['branch'])&&isset($_POST['gender']))
{
	$first=$_POST['first'];
	$last=$_POST['last'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$semester=$_POST['semester'];
	$branch=$_POST['branch'];
	$gender=$_POST['gender'];
	if(!empty($first)&&!empty($last)&&!empty($number)&&!empty($email)&&!empty($username)&&!empty($password)&&!empty($semester)&&!empty($branch)&&!empty($gender))
	{
		$query="INSERT INTO `codeadeptregistrations` (`Serial Number`, `First Name`, `Last Name`, `Phone Number`, `Email`, `Enrollment Number`, `password`, `semester`, `Branch`, `Gender`) VALUES (NULL, '$first', '$last', '$number', '$email', '$username', '$password', '$semester', '$branch', '$gender');";
		$query_run=mysqli_query($conn,$query);
		if($query_run)
		{
			

			  $to = $email;
	         $subject = "Registration successful | CodeAdept 2.0";
	         
	         $message = "<p> You have Successfully registered for CodeAdept 2.0 with username : ".$username.". You will be given the slot number and timings for your test soon on this email address.<br>
	         		Venue : IT Lab, UIT-RGPV <br>
	         		Date : Oct-08-2018 <br>
	         		Visit www.codeadept.likhopao.com for furthur details </p>
	         		Winners of this coding event may get a prize money worth Rs. 6000 along with certificates of winning. Participation certificates will also be given to the contestants clearing the first round of the event.<br><br>
	         		<strong>Note : </strong> Registrations are free of cost.<br><br>
	         		Depending upon the number of registrations the event can also be extended for a day which will be informed to you on your registered E-mail or by messages <br>";

	         $message .= "<h2>Thank You for the registrations </h2>";
	         
	         $header = "From: <CodeAdept> \r\n";
	         $header .= "Cc:codeadept.doit@gmail.com \r\n";
	         $header .= "MIME-Version: 1.0\r\n";
	         $header .= "Content-type: text/html\r\n";
	         
	       
	         $retval = mail ($to,$subject,$message,$header);
	         
		         if( $retval == true )
		          {
		            echo "<script> var r = confirm('Record Added Successfully!For further details go through the e-mail Click OK to go to the homepage');
					if (r == true) {
		    		window.open('index.html','_self')
					} else {
		    		window.open('register.html','_self');
					}</script>";
		          }
		         else 
		         {
		            echo "<script> var r = confirm('User registered successfully! Error in sending e-mail');
					if (r == true) {
		    		window.open('register.html','_self')
					} else {
		    		window.open('index.html','_self');
					}</script>";
	         	 }
        }
	else
	{
	    echo "<script> var r = confirm('Username already exists !! Click OK to try again with different username');
			if (r == true) {
    		window.open('register.html','_self')
			} else {
    		window.open('index.html','_self');
			}</script>";
	    
	}
	
}
else
	{
		echo "Please fill up all the details";
	}
}



?>