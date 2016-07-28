<!DOCTYPE html>
<html>
	<head>
		<title>Update Profile</title>

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
				margin-bottom: 0%;}

			td:nth-child(even){	font-family: myFormFont;
				font-size: 15px;
				color:black;
				text-align:center;}		

			table{width:30%;
				margin-left: 35%;
				margin-top: 0%;
				margin-bottom: 0%;}

			table, tr, td{
				border: 1px solid black;
				border-collapse: collapse;
				border-style: outset;
				padding: 15px;
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
			input[type=date]
			{ 
				width: 78%;   
				margin-left: 20px;   
				padding: 5px 10px;   
				font-size: 1em;  
				width:80%; 
				 border-radius: 2px;   
				 outline: none;  
				 border: 1px solid black; 
				 } 
			input[type=text] 
				{ 
				width: 78%;   
				margin-left: 20px;   
				padding: 5px 10px;   
				font-size: 1em;  
				width:80%; 
				 border-radius: 2px;   
				 outline: none;  
				 border: 1px solid black; 
				 } 
			input[type=submit] {  
				position: relative;  
				margin-top: 1%;  
				margin-bottom: 1%; 
				left: 10%;  
				transform: translate(-50%, 0); 
				font-family: myFormFont;  
				color: white; 
				background: black;  
				outline: none; 
				border: none;  
				padding:10px; 
				font-size: 1.3em;  
				font-weight: 400;  
		} 
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
	
	<h1 id="header">Students Placement Management System</h1>

	<p>
		Following are the profile details that can be updated.</p>

		<table id="profileTable" align="center">
				<tr>
				<form name="form1" method="POST" action="updateprocess-student.php">
					<td>Username</td>
					<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('pat');
					$sqlretrieve1=mysql_query('select * from viewstudent');

					$row=mysql_fetch_array($sqlretrieve1)
					 ?>
					<td> <input name="username" type="text" id="username" value="<?php echo $row['username']; ?>" readonly> </td>
				</tr>
				<tr>
					<td>Name</td>
					<td> <input name="name" type="text" id="name" value="<?php echo $row['name']; ?>"> </td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td> <input name="dob" type="date" id="dob" value="<?php echo $row['dob']; ?>"> </td>
				</tr>
				<tr>
					<td>Gender</td>
					<td> <input name="gender" type="text" id="gender" value="<?php echo $row['gender']; ?>"> </td>>
				<tr>
					<td>Phone Number</td>
					<td> <input name="phone" type="text" id="phone" value="<?php echo $row['phone']; ?>"> </td>
				</tr>
				<tr>
					<td>Email Address</td>
					<td> <input name="email" type="text" id="email" value="<?php echo $row['email']; ?>"> </td>
				</tr>
				<tr>
					<td>Branch</td>
					<td> <input name="branch" type="text" id="branch" value="<?php echo $row['branch']; ?>"> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td> <input name="password" type="text" id="password" value="<?php echo $row['password']; ?>"> </td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="Submit" value="Update"></td>
				</tr>
					<?php 
					mysql_close($con);
					?>
			</table>

	<br>
	<div id="footer"><a href="dashboard-student.php">Back to Dashboard</a></div>



	</body>
</html>