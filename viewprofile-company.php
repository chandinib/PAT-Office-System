<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>

		<style>

			@font-face	{font-family: myFormFont;
			src: url(Roboto-Regular.ttf);}
			
			#header {
					    font-family:myFormFont;
					    background-color:black;
					    color:white;
					    text-align:center;
					    height:60px;
					    margin:0px;
					    padding-top:20px;
					}
			p{	font-family: myFormFont;
				color: black;
				text-align:center;
				margin-bottom: 1%;}

			td:nth-child(even){	font-family: myFormFont;
				font-size: 15px;
				color:black;
				text-align:center;}		

			table{width:30%;
				margin-left: 35%;}

			table, tr, td{
				border: 1px solid black;
				border-collapse: collapse;
				border-style: outset;
			}

			td:nth-child(odd){	font-family: myFormFont;
				font-size: 15px;
				color:black;
				text-align:center;}			

			a{	display: block;
				font-family:myFormFont;
				text-align: center;
				margin-top: 1%;
				margin-left:auto;
				margin-right: auto;
				color:white;
				border-top:1%;}
			#footer {
					   background-color:black;
					   color:white;
					   clear:both;
					   text-align:center;
					   margin-top: 2%;
					   padding:5px; 
					   height:50px;
			}
		
		</style>
	</head>

	<body>
	
	<h1 id="header">Company Placement Management System</h1>

	<p>
		Following are the profile details.</p>

		<table id="profileTable" align="center">
				<tr>
					<td>Name</td>
					<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('pat');
					$sqlretrieve1=mysql_query('select * from viewcompany');


					while($row=mysql_fetch_array($sqlretrieve1))
					{ ?>
						<td> <?php echo $row['name']; ?> </td>
				</tr>
				<tr>
					<td>Username</td>
					<td> <?php echo $row['username']; ?> </td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td> <?php echo $row['phone']; ?> </td>
				</tr>
				<tr>
					<td>Email Address</td>
					<td> <?php echo $row['email']; ?> </td>
				</tr>
				<tr>
					<td>Designation</td>
					<td> <?php echo $row['designation']; ?> </td>
				</tr>
				<tr>
					<td>Role</td>
					<td> <?php echo $row['role']; ?> </td>
				</tr>
					<?php }

					mysql_close($con);
					?>
			</table>

	<br>
	<div id="footer"><a href="dashboard-company.php">Back to Dashboard</a></div>



	</body>
</html>