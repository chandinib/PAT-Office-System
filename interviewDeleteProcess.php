<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('pat');
	$count=mysql_query('select count(interview) from interviews');
	$sqlretrieve=mysql_query('select * from interviews');

	if(isset($_POST['deleteInterview']))
	{		
			for($i=0;$i<count($_POST['checkbox1']);$i++)
			{
				$del_id = $_POST['checkbox1'][$i];
				$sql = "DELETE FROM interviews WHERE id='$del_id'";
				$result = mysql_query($sql);
			}

			if($sqlretrieve){	
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=dashboard-company.php\">";
			}
		}
									 		
	mysql_close($con);
?>