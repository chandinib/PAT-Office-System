<!DOCTYPE html> 
<html > 
<head> 
<style> 
		@font-face{ 
		font-family: myfont; 
		src: url(Roboto-Regular.ttf);          
		} 
		html, body {   
		border: 0;  
		padding: 0;  
		margin: 0;  
		height: 100%; 
		} 
		body { 
		background: #eeeeee;   
		display:flex;
		} 
		form {  
		background: white; 
		border:1px solid black; 
		width: 35%;  
		font-family: myfont;   
		position: relative;  
		color: #333333; 
		float:left;
		margin-top:5%;
		} 
		form h2 {  
		background: black;  
		padding-top: 10px; 
		padding-bottom: 40px;  
		color: white;   
		font-weight: 600;  
		height: 20px; 
		text-align: center; 
		margin-top: 0; 
		} 
		form label { 
		margin-left: 20px; 
		display: inline-block; 
		margin-top: 10px; 
		margin-bottom: 5px; 
		position: relative; 
		} 
		form input  
		{ 
		display: block;  
		width: 78%;   
		margin-left: 20px;   
		padding: 5px 10px;   
		font-size: 1em;   
		 border-radius: 3px;   
		 outline: none;  
		 border: 1px solid #ccc; 
		 } 
		form input[type=submit] {  
		position: relative;  
		margin-top: 30px;  
		margin-bottom: 30px; 
		left: 40%;  
		transform: translate(-50%, 0); 
		font-family: myfont;  
		color: white; 
		background: black;  
		outline: none; 
		border: none;  
		padding: 5px 15px;  
		font-size: 1.3em;  
		font-weight: 400;  
		} 
		div#banner {  
		 position: absolute;  
		 top: 0;  
		 left: 0;  
		 background-color:black ;  
		 width: 100%; 
		 color: white; 
		 } 
		 div#banner-content {  
		 width: 800px;  
		 margin: 0 auto;  
		 padding: 10px;  
		 font-size: 35px; 
		 font-family: myfont; 
		 text-align: center; 
		font-weight: 600;  
		} 
		select{
		font-family: myfont;
		margin-left: 20px;
		font-size: 15px;
		}
 </style> 
 </head> 
 <body> 
	 <div id="banner"> 
	 <div id="banner-content"> 
	 PAT Office System 
	 </div> 
	 </div> 

	 <form method="POST" action ="signupstudent.php" id="signupstudent">
	   <h2>Sign Up (Student)</h2> 
	   <label>Username (Use Register Number)</label> 
	   <input type="text" name="username" maxlength="10" required/> 
	   <label>Name</label> 
	   <input type="text" name="name" required/> 
	   <label>Date of Birth</label>
	   <input type="date" name="dob" required/>
	   <label>Gender</label>
		  <select name ="gender" required>
		  <option value="male">Male</option> 
		  <option value="female">Female</option>
		  </select><br>
	   <label>Phone Number</label> 
	   <input type="text" name="phone" maxlength="10" required/> 
	   <label>Email Id</label> 
	   <input type="text" name="email" required/> 
	     <label>Branch</label>
		  <select name ="branch" required>
		  <option value="BioTech">BioTech</option> 
		  <option value="Civil">Civil</option> 
		  <option value="CSE">CSE</option> 
		  <option value="EEE">EEE</option> 
		  <option value="ECE">ECE</option> 
		  <option value="IT">IT</option>
		  <option value="Mech">Mech</option> 
		  </select><br>
	   <label>Password</label> 
	   <input type="password" name="password" maxlength="20" required/> 
	   <input type="submit" value="Sign Up"> 
	 </form> 

	 <form method="POST" action ="signupcompany.php" id="signupcompany">
	   <h2>Sign Up (Company)</h2> 
	   <label>Name</label> 
	   <input type="text" name="name" required/> 
	   <label>Username</label> 
	   <input type="text" name="username" required/> 
	   <label>Phone Number</label> 
	   <input type="text" name="phone" maxlength="10" required/> 
	   <label>Email Id</label> 
	   <input type="text" name="email" required/> 
		<label>Designation</label> 
	   <input type="text" name="designation" required/> 
	   <label>Password</label> 
	   <input type="password" name="password" required/> 
	   <input type="submit" value="Sign Up">
	 </form> 

	 <form method="POST" action="login.php" id="login"> 
	   <h2>Log In</h2> 
	   <label>Username</label> 
	   <input type="text" name="username" required/> 
	   <label>Password</label> 
	   <input type="password" name="password" required/> 
	   <input type="submit" value="Log In"> 
	 </form> 
 </body> 
 </html> 
