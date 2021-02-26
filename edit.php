<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
</head>
<body>


	<h1>UPDATE</h1>
	<hr>
	

	<?php 

	$data=$conn->prepare("SELECT * from BENUTZER where BENUTZER_ID=:id");
	$data->execute(array(
		'id' => $_GET['BENUTZER_ID']
	));

	$qdata=$data->fetch(PDO::FETCH_ASSOC);

	?>

	<form action="operation.php" method="POST">

		<input type="text" required="" name="BENUTZER_ID" value="<?php echo $qdata['BENUTZER_ID'] ?>">
		<input type="text" required="" name="BENUTZER_NAME" value="<?php echo $qdata['BENUTZER_NAME'] ?>">
		<input type="text" required="" name="BENUTZER_ROLE_ID" value="<?php echo $qdata['BENUTZER_ROLE_ID'] ?>">
		

		<input type="hidden" value="<?php echo $qdata['BENUTZER_ID'] ?>" name="BENUTZER_ID">
		<button type="submit" name="update">Edit</button>

	</form>

	<br>







</body>
</html>