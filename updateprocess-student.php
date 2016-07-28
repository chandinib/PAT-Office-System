<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pat"; // Database name 
$tbl_name="viewstudent"; // Table name 

// Connect to server and select database.
 mysql_connect("$host", "$username", "$password")or die("Cannot connect!"); 
 mysql_select_db("$db_name")or die("Cannot select DB!");
 	$username='13BCE0803';
	$name = filter_input(INPUT_POST,'name');
	$dob = filter_input(INPUT_POST,'dob');
	$gender=$_POST['gender'];
	$phone = filter_input(INPUT_POST,'phone');
	$email = filter_input(INPUT_POST,'email');
	$branch=$_POST['branch'];
	$password = filter_input(INPUT_POST,'password');

// update data in mysql database 
 $sql="UPDATE $tbl_name SET name='$name',dob='$dob',gender='$gender',phone='$phone',email='$email',branch='$branch',password='$password' WHERE username='$username'";
 $result=mysql_query($sql);

// if successfully updated. 
 if($result){
		echo "<script> alert('Update Successful!');
		window.location.href='dashboard-student.php';
		</script>;";
 }

 else {
 		echo "<script> alert('Error! Update Unsuccessful.');
		window.location.href='updateprofile-student.php';
		</script>";
 }