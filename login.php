<?php
$servername='localhost';
$username='root';
$password='';
$dbname='pat';
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn ->connect_error){
die("error".$conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
$sql1 = "select * from login where username = '$username'";
$result=mysqli_query($conn,$sql1);

if(mysqli_num_rows($result)>0)
	{
		while($test=mysqli_fetch_array($result,MYSQLI_BOTH))
		{	
					if($test[2]=="Company")
					{
						header("location:dashboard-company.php");
					}
					else
					{
						header("location:dashboard-student.php");
					}
		}
	}
else
		{
					echo "<script> alert('Invalid Username and Password/Approval Pending');
					window.location.href='Main.php';
					</script>";
		}
		
mysqli_close($conn);
?>

