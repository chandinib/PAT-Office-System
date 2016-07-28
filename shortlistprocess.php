<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pat"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select database.
 mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
 mysql_select_db("$db_name")or die("cannot select DB");

// update data in mysql database 
 $sql="UPDATE $tbl_name SET selected='Selected' WHERE username='$id'";
 $result=mysql_query($sql);

// if successfully updated. 
 if($result){
 			echo "<script> alert('Selection Successful!');
			window.location.href='updateplacementprogress-company.php';
			</script>;";
 }

 else {
			echo "<script> alert('Error! Selection Unsuccessful!');
			window.location.href='updateplacementprogress-company.php';
			</script>;";
 }

 ?>