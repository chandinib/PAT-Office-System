<!DOCTYPE html>
<html>
	<head>
		<title>Allot Interviews</title>

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
				padding-left: 15px;
				padding-right: 15px;
				padding-bottom: 2px;
				padding-top: 2px;
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
				padding:5px;
				font-size: 14px;  
				font-weight: 400;  
				width:70px;
				height:30px;
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
	
	<h1 id="header">Interview Allotment</h1>

	<p>
		Following are the companies that need interview slots to be allotted:</p>

	
				<form name="form1" method="POST" action="updateprocess-company.php">
				
					<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('pat');
					$sqlretrieve1=mysql_query('select * from company');

					while($row=mysql_fetch_array($sqlretrieve1))
					{
					 ?>
				<table id="profileTable" align="center">
				<tr>
					<td>Name</td>
					<td> <?php echo $row['name']; ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td> <?php echo $row['username']; ?> </td>
				</tr>
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
					<td>Interview Time</td>
					<td> <input name="time" type="text" id="time" value=""> </td>
				</tr>
				<tr>
					<td>Interview Location</td>
					<td> <input name="location" type="text" id="location" value=""> </td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="Submit" value="Allot"></td>
				</tr>
				</table>
				<br>
					<?php }
					mysql_close($con);
					?>

	<div id="footer"><a href="../PAT/dashboard-admin.php">Back to Dashboard</a></div>



	</body>
</html>