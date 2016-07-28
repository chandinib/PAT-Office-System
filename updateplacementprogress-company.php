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
				border-top:1%;
				background-color: black;}
			#footer {
					   background-color:black;
					   color:white;
					   clear:both;
					   text-align:center;
					   margin-top: 0%;
					   padding:5px; 
					   height:50px;
			}
		
		</style>
	</head>

	<body>
	
	<h1 id="header">Placement Progress</h1>

	<p>
		Following are the profile details.</p>
					
					<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('pat');
					$sqlretrieve1=mysql_query('select * from student');


					while($row=mysql_fetch_array($sqlretrieve1))
					{ ?>
				<table id="profileTable" align="center">
				<tr>
						<td>Username</td>
						<td> <?php echo $row['username']; ?> </td>
				</tr>
				<tr>
					<td>Name</td>
					<td> <?php echo $row['name']; ?> </td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td> <?php echo $row['dob']; ?> </td>
				</tr>
				<tr>
					<td>Gender</td>
					<td> <?php echo $row['gender']; ?> </td>
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
					<td>Branch</td>
					<td> <?php echo $row['branch']; ?> </td>
				</tr>
				<tr>
					<td>Role</td>
					<td> <?php echo $row['role']; ?> </td>
				</tr>
				<tr>
					<td>Selected</td>
					<td> <?php echo $row['selected']; ?> </td>
				</tr>
				<tr>
				 <td colspan="2" align="center"><a href="shortlistprocess.php?id=<? echo $row['username']; ?>">Update as Selected</a></td>
				</tr>
			</table>
			<br>
					<?php }

					mysql_close($con);
					?>
		

	<br>

	<div id="footer"><a href="dashboard-company.php">Back to Dashboard</a></div>



	</body>
</html>