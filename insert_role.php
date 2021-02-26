<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT ROLE</title>
</head>
<body>


	<h1>INSERT ROLE</h1>
	<hr>
		<form action="operation.php" method="POST">
		
		<input type="text" required="" name="ROLE_ID" placeholder="ID">
		<input type="text" required="" name="ROLE_NAME" placeholder="NAME">
		
		<button type="submit" name="insert_role">SEND</button>

	</form>

	<br>



</body>
</html>