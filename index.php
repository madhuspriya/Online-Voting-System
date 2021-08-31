<html>
<head>
	<title>ONLINE VOTING SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
	<div id="headersection">
		<h1>ONLINE VOTING SYSTEMS</h1>
	    <hr>
	</div>
	<div id="bodysection">
    <form action="../api/login.php" method="POST">
	   <h2>LOGIN</h2>
	   <input type="number" name="mobile" placeholder="Enter number"><br><br>
	   <input type="password" name="password" placeholder="Enter password"><br><br>
	   <select id="dropbox" name="role"><br><br>
	   	<option value="1">Voter</option>
	   	<option value="2">Group</option>
	   </select><br><br>
	   <button id="loginbtn" type="submit">login</button><br><br>
	   New user ? <a href="routes/registration.html">Register here</a>
	</form>
	</div>
</center>
</body>
</html>