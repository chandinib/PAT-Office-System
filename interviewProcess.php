<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$interview=filter_input(INPUT_POST,'newInterview');

	$con=mysql_connect('localhost','root','');
	mysql_select_db('pat');

	$sqlempty="select * from interviews";
	if($sqlempty)
	{
		$sqlalter="ALTER TABLE interviews AUTO_INCREMENT = 1";
		mysql_query($sqlalter);
	}

	$sql="insert into interviews(interview,completed) values('$interview',0)";

	$res=mysql_query($sql);

	if($res){
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=dashboard-company.php\">";
	}
	
	mysql_close($con);


?>