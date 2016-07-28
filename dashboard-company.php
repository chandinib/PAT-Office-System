<!DOCTYPE html>
<html>
	<head>
		<title>
			Dashboard | Company
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
			#meetings{
						font-family:Font;
					    background-color:white;
					    color:black;
					    text-align:center;
					    height:130px;
					    margin:0px;
					    padding-top:20px;
					}
			#section {
			   			font-family:Font;
			   			color:black;
			   			background-color:#eeeeee;
			   			height:350px; 
			    		float:left;
			    		padding:1%;
			    		width: 100%;
					}
			#footer {
					   background-color:black;
					   color:white;
					   clear:both;
					   text-align:center;
					   padding:5px; 
			}
			h3		{
						font-family:Font;
						margin-top:1%;
						text-align:center;
						color:black;
					}
			input[type=checkbox]	{	margin-top:5%;
									}
			input[type=image]	{
									display:inline-block;
									width:20px;
									height:20px;
									margin-left:50%;
									margin-top:0%;
									margin-bottom:0%;
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
			input[type=button] {	display:block;
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
			input[type=button]:hover {	display:block;
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
			table {
						font-family:Font;
						margin-top:1%;
						align:center;

					}

			tr,td{
						padding:3%;
					}	

		</style>

	</head>


		<body>
			<h1 id="header">Company Placement Management System</h1>

			<form  id="interviews" action="interviewProcess.php" method="POST">
			<h3>Post Interview Updates</h3>

				<table id="interviewTable" align="center">
				<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('pat');
					$sqlretrieve1=mysql_query('select * from interviews');

					while($row=mysql_fetch_array($sqlretrieve1))
					{ ?>
						<tr>
						<td><input name="checkbox1[]" type="checkbox" id="checkbox1[]" value=" <?php echo $row['id']; ?> "></td>
						<td><?php echo $row['interview']; ?> </td>
						</tr>
					<?php } ?>
				<tr>
				<td><input type="checkbox" name="checkbox1" ></td>
				<td><input type="text" name="newInterview"></td>
				</tr>
			</table>
			<input type="image" src="add.png" onmouseover="this.src='addhover.png'" onmouseout="this.src='add.png'" value="AddInterview" formaction="interviewProcess.php">
			<input type="image" src="delete.png" onmouseover="this.src='deletehover.png'" onmouseout="this.src='delete.png'" value="deleteInterview" formaction="interviewDeleteProcess.php" name="deleteInterview" id="deleteInterview">

			</form>

			<div id="footer"></div>

			<div id="section">
			<h3>Company Activities</h3>
			<table id="companyactivities" align="center">
				<tr>
					<td><input type="button" onclick="parent.location='updateprofile-company.php'" value="Setup Profile"></td>
					<td><input type="button" onclick="parent.location='viewprofile-company.php'" value="View Profile"></td>
					<td><input type="button" value="Offer Registration"></td>
				</tr>
				<tr>
					<td><input type="button" onclick="parent.location='listofstudentsregistered-company.php'" value="List of Students registered"></td>
					<td><input type="button" onclick="parent.location='updateplacementprogress-company.php'" value="Update Placement Progress"></td>
					<td><input type="button" onclick="parent.location='generateshortlist.php'" value="Generate Shortlist"></td>

				</tr>
				<tr>
					<td><input type="button" onclick = "parent.location='Main.php'" value="Log Out"></td>
				</tr>
			</table>
			</div>

			<div id="footer"></div>


	</body>
</html>