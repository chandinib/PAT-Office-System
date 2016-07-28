<?php

$name = filter_input(INPUT_POST,'name');
$username = filter_input(INPUT_POST,'username');
$phone = filter_input(INPUT_POST,'phone');
$email = filter_input(INPUT_POST,'email');
$designation = filter_input(INPUT_POST,'designation');
$password = filter_input(INPUT_POST,'password');

error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect('localhost','root','');
mysql_select_db('pat');

$sql = "insert into company(name,username,phone,email,designation,password)values('$name','$username','$phone','$email','$designation','$password')";
$res=mysql_query($sql);

if($res)
{		
		

		echo "<script> alert('Sign In Successful! Wait for the Approval');
		window.location.href='Main.php';
		</script>;";
		$sql1 = "insert into login(username,password,role) values('$username','$password','Company')";
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