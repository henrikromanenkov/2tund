<?php
 
	

	echo$_GET["email"];

?>
<html>
<head>
	<title>Login page</title>
	
</head>
<body>
	<h2>Log in</h2>
		<form action="Login.php" method="get">
			<input name="email" type="email" placeholder="E-post"> <br><br>
			<input name="password" type="password" placeholder="Parool"> <br><br>
			<input type="submit" value="Log in"> 
		</form>
		
		
	<h2>Create useer</h2>
</body>

</html>