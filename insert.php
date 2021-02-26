<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
</head>
<body>


	<h1>INSERT</h1>
	<hr>
		<form action="operation.php" method="POST">
		
		<input type="text" required="" name="BENUTZER_ID" placeholder="ID">
		<input type="text" required="" name="BENUTZER_NAME" placeholder="NAME">
		<input type="text" required="" name="BENUTZER_ROLE_ID" placeholder="ROLE_ID">
		<button type="submit" name="insertislemi">SEND</button>

	</form>

	<br>



</body>
</html>