<html>
<head>
	<title>ONLINE VOTING SYSTEM . REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body>
	<style>
		#address{
			width: 30%;
		}
		#imagepart{
			border: 2px solid black;
			border-radius: 5px;
			padding: 10px;
			width: 30%;
		}
		#role{
			border: 2px solid black;
			border-radius: 5px;
			padding: 10px;
			width: 30%;
		}
		#role select{
			padding: 10px;
			border-radius: 5px;

		}

	</style>
	<div id="headersection">
	<h1>ONLINE VOTING SYSTEM</h1>
    </div>
	<hr>
	<h3>REGISTRATION</h3>
	<form action="../api/register.php/" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="Enter Name">
		<input type="number" name="mobile" placeholder="Enter Mobile"><br><br>
		<input type="password" name="password" placeholder="Password">
		<input type="password" name="cpassword" placeholder="Confirm Password"><br><br>
		<input id="address" type="text" name="address" placeholder="Enter Address"><br><br>
		<center>
		<div id="imagepart">
			Upload image:<input type="file" name="photo">
		</div>
		<br>
		<div id="role">
		Select your Role:<select name="role"><br><br>
			<option value="1">Voter</option>
			<option value="2">Group</option>
		</select>
	    </div>
		<br>
	    </center>
		<button 
		style="padding: 8px;
	           border-radius: 5px;
	           background-color: blue;
	           color: white;
	           font-size: 15px;">
	        Register</button><br><br>
		    Already user? <a href="../index.html">Login here</a>
    </form>

</body>
</html>