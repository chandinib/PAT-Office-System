<!DOCTYPE html>
<html>
	<head>
		<title>
			Dashboard | Club Name
		</title>
		
		<style>
			@font-face{
						font-family:Font;
						src:url(Roboto-Regular.ttf);
			}
			body	{
						margin:0px;
					}
			#header {
					    font-family:Font;
					    background-color:black;
					    color:white;
					    text-align:center;
					    height:60px;
					    margin:0px;
					    padding-top:20px;
					}
			#interviews{
						font-family:Font;
					    background-color:white;
					    color:black;
					    text-align:center;
					    height:110px;
					    margin:0px;
					    padding-top:20px;
					}
			#todo {
						padding:1%;
					    font-family:Font;
					    line-height:30px;
					    background-color:#eeeeee;
					    height:300px;
					    width:24.8%;
					    float:left; 
					    border:1px solid black;
				}
			#section {
			   			font-family:Font;
			   			background-color:#eeeeee;
			   			width:71%;
			   			height:300px; 
			    		float:left;
			    		padding:1%;
					}
			#footer {
					   background-color:black;
					   color:white;
					   clear:both;
					   text-align:center;
					   padding:5px; 
			}
			h3		{
						margin:0px;
						text-align:center;
						color:black;
					}
			input[type=checkbox]	{	margin-top:5%;
									}
			input[type=image]	{
									display:inline-block;
									margin-top:1%;
									margin-left:70px;
									height:30px;
									width:30px;
								}
			input[type=text]	{
									font-family:Font;
									display:block;
									margin-top:1%;
									margin-left:auto;
									margin-right:auto;
									width:250px;
									border-radius: 5px;
									border:1px solid black;
								}
			input[type=button] {
					    background-color: black;
					    border-radius: 5px;
					    border-style:none;
					    color: white;
					    padding: 15px;
					    text-align: center;
					    display: inline-block;
					    font-size: 16px;
					    width:250px;
					    margin-left: auto;
					    margin-right: auto;
					 }
			input[type=button]:hover {	
					    background-color: #eeeeee;
					    border-radius: 5px;
					    border: 1px solid black;
					    color: black;
					    padding: 15px;
					    text-align: center;
					    display: inline-block;
					    font-size: 16px;
					    width:250px;
					    margin-left: auto;
					    margin-right: auto;
						}
			table#studentactivities {
						margin-top:1%;

					}

			tr,td{
						padding:3%;
					}

			table#toDoTable {
						margin-top:1%;
					}			

		</style>
	</head>

	<body>

			<h1 id="header">Students Placement Management System</h1>

			<form id="interviews" action="interviewProcess.php" method="POST">
			<h3>Interview Updates</h3>

				<table id="interviewTable" align="center">
					<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('pat');
					$sqlretrieve1=mysql_query('select interview from interviews');

					while($row=mysql_fetch_array($sqlretrieve1))
					{ ?>
						<tr>
						<td> <?php echo $row['interview']; ?> </td>
						</tr>
					<?php }

					mysql_close($con);
					?>
			</table>

			</form>

			<div id="footer"></div>

			<form id="todo" action="toDoProcess.php" method="POST">
			<h3>Upcoming Tasks</h3>

			<table id="toDoTable">
			<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('pat');
					$sqlretrieve=mysql_query('select * from toDo');

					while($row=mysql_fetch_array($sqlretrieve))
					{ ?>
						<tr>
						<td><input name="checkbox[]" type="checkbox" id="checkbox[]" value=" <?php echo $row['id']; ?> "></td>
						<td> <?php echo $row['toDo']; ?> </td>
						</tr>
					<?php } ?>
				<tr>
				<td><input type="checkbox" name="checkbox" ></td>
				<td><input type="text" name="newToDo"></td>
			</tr>
			</table>
			 <input type="image" src="add.png" onmouseover="this.src='addhover.png'" onmouseout="this.src='add.png'" value="AddToDo" formaction="toDoProcess.php">
			 <input type="image" src="delete.png" onmouseover="this.src='deletehover.png'" onmouseout="this.src='delete.png'" value="DeleteToDo" formaction="toDoDeleteProcess.php" name="delete" id="delete">

			 </form>

			<div id="section">

			<h3>Core Activities</h3>
			<table id="studentactivities" align="center">
				<tr>
					<td><input type="button" onclick="parent.location='updateprofile-student.php'" value="Set Up Profile"></td>
					<td><input type="button" onclick="parent.location='viewprofile-student.php'" value="View Profile"></td>
					<td><input type="button" value="Register for Company"></td>
				</tr>
				<tr>
					<td><input type="button" onclick="parent.location='generateshortlist.php'" value="Placement Progress"</button></td>
					<td><input type="button" onclick = "parent.location='Main.php'" value="Log Out"></td>
				</tr>

			</table>
			</div>

			<div id="footer"></div>

</body>

	</body>
</html>