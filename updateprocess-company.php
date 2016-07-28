<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pat"; // Database name 
$tbl_name="viewcompany"; // Table name 

// Connect to server and select database.
 mysql_connect("$host", "$username", "$password")or die("Cannot connect!"); 
 mysql_select_db("$db_name")or die("Cannot select DB!");
 	$id=1;
	$name = filter_input(INPUT_POST,'name');
	$username = filter_input(INPUT_POST,'username');
	$phone = filter_input(INPUT_POST,'phone');
	$email = filter_input(INPUT_POST,'email');
	$designation = filter_input(INPUT_POST,'designation');
	$password = filter_input(INPUT_POST,'password');

// update data in mysql database 
 $sql="UPDATE $tbl_name SET phone='$phone',email='$email',designation='$designation',password='$password' WHERE id='$id'";
 $result=mysql_query($sql);

// if successfully updated. 
 if($result){
		echo "<script> alert('Update Successful!');
		window.location.href='dashboard-company.php';
		</script>;";
 }

 else {
 		echo "<script> alert('Error! Update Unsuccessful.');
		window.location.href='updateprofile-company.php';
		</script>";
 }