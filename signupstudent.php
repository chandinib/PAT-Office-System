<?php

$username = filter_input(INPUT_POST,'username');
$name = filter_input(INPUT_POST,'name');
$dob = filter_input(INPUT_POST,'dob');
$gender=$_POST['gender'];
$phone = filter_input(INPUT_POST,'phone');
$email = filter_input(INPUT_POST,'email');
$branch=$_POST['branch'];
$password = filter_input(INPUT_POST,'password');

error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect('localhost','root','');
mysql_select_db('pat');

$sql = "insert into student(username,name,dob,gender,phone,email,branch,password)values('$username','$name','$dob','$gender','$phone','$email','$branch','$password')";
$res=mysql_query($sql);

if($res)
{		
		

		echo "<script> alert('Sign Up Successful! Wait for the Approval');
		window.location.href='Main.php';
		</script>;";
		$sql1 = "insert into login(username,password,role) values('$username','$password','Student')";
		mysql_query($sql1);
}
else
{
		echo "<script> alert('You are already Signed Up. Do Login to Access or Wait for Approval');
		window.location.href='Main.php';
		</script>";
}
mysql_close($con);

?>