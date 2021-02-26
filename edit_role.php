<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE ROLE TABELLE</title>
</head>
<body>
	<h1>UPDATE ROLE TABELLE</h1>
	<hr>
	<?php
	$data=$conn->prepare("SELECT * from ROLE where ROLE_ID=:id");
	$data->execute(array(
		'id' => $_GET['ROLE_ID']
	));
	$qdata=$data->fetch(PDO::FETCH_ASSOC);
	?>
	<form action="operation.php" method="POST">
		<input type="text" required="" name="ROLE_ID" value="<?php echo $qdata['ROLE_ID'] ?>">
		<input type="text" required="" name="ROLE_NAME" value="<?php echo $qdata['ROLE_NAME'] ?>">

        <input type="hidden" value="<?php echo $qdata['ROLE_ID'] ?>" name="ROLE_ID">
		<button type="submit" name="update_role">Edit</button>
	</form>
	<br>
</body>
</html>