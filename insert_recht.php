<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT RECHTE</title>
</head>
<body>


	<h1>INSERT RECHTE</h1>
	<hr>
		<form action="operation.php" method="POST">
		
		<input type="text" required="" name="RECHTE_ID" placeholder="ID">
		<input type="text" required="" name="RECHTE_NAME" placeholder="NAME">
		
		<button type="submit" name="insert_recht">SEND</button>

	</form>

	<br>



</body>
</html>