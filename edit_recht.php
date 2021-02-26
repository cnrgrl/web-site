<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE RECHTE TABELLE</title>
</head>
<body>
	<h1>UPDATE RECHTE TABELLE</h1>
	<hr>
	<?php
	$data=$conn->prepare("SELECT * from RECHTE where RECHTE_ID=:id");
	$data->execute(array(
		'id' => $_GET['RECHTE_ID']
	));
	$qdata=$data->fetch(PDO::FETCH_ASSOC);
	?>
	<form action="operation.php" method="POST">
		<input type="text" required="" name="RECHTE_ID" value="<?php echo $qdata['RECHTE_ID'] ?>">
		<input type="text" required="" name="RECHTE_NAME" value="<?php echo $qdata['RECHTE_NAME'] ?>">

        <input type="hidden" value="<?php echo $qdata['RECHTE_ID'] ?>" name="RECHTE_ID">
		<button type="submit" name="update_recht">Edit</button>
	</form>
	<br>
</body>
</html>