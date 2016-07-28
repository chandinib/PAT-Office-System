<!DOCTYPE html>
<html>
	<head>
		<title>Shortlist</title>

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

			table{width:50%;
				margin-left: 25%;}

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
	
	<h1 id="header">Generate Shortlist</h1>

	<p>
		Following are the shortlisted student details.</p>
					
				<table id="profileTable" align="center">
				<tr>
						<th>Username</th>
						<th>Name</th>
						<th>Date of Birth</th>
						<th>Gender</th>
						<th>Phone Number</th>
						<th>Email Address</th>
						<th>Branch</th>
						<th>Selected</th>
				</tr>

					<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('pat');
					$sqlretrieve1=mysql_query("select * from student where selected='Selected'");


					while($row=mysql_fetch_array($sqlretrieve1))
					{ ?>
			
				<tr>
					<td> <?php echo $row['username']; ?> </td>
					<td> <?php echo $row['name']; ?> </td>
					<td> <?php echo $row['dob']; ?> </td>
					<td> <?php echo $row['gender']; ?> </td>
					<td> <?php echo $row['phone']; ?> </td>
					<td> <?php echo $row['email']; ?> </td>
					<td> <?php echo $row['branch']; ?> </td>
					<td> <?php echo $row['selected']; ?> </td>
				</tr>
					<?php }

					mysql_close($con);
					?>
					</table>

	<br>

	<div id="footer"><a href="dashboard-company.php">Back to Dashboard</a></div>



	</body>
</html>