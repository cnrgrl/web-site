<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles.css">
	<title>BENUTZER TABELLE</title>
</head>
<body>


<div class="container1">
    <nav>
        <div class="daireclass"><h5>GS</h5></div>
        <?php
        include 'nav.php';
        ?>
        <a href="index.php">Homepage</a>
        <a href="#">Users</a>
        <a href="benutzer.php">Benutzer</a>
        <a href="role.php">Rolle</a>
        <a href="recht.php">Rechte</a>
        <a href="#">Roll-Recht</a>

        
    </nav>
    <div class="container2">
        <header>
            <?php
            include 'header.php';
            ?>
        </header>
        <div class="content">
            	<h1>BENUTZER TABELLE</h1>
	<hr>

<table style="width: 60%" border="1">
		
		<tr>
			<th>NO</th>
			<th>BENUTZER_ID</th>
			<th>BENUTZER_NAME</th>
			<th>BENUTZER_ROLE_ID</th>
			<th width="50">FUNCTION1</th>
			<th width="50">FUNCTION2</th>
		</tr>

		<?php

		$data=$conn->prepare("SELECT * from BENUTZER");
		$data->execute();

		$counter=0;

		while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>



		<tr>
			<td><?php echo $counter; ?></td>
			<td><?php echo $qdata['BENUTZER_ID'] ?></td>
			<td><?php echo $qdata['BENUTZER_NAME'] ?></td>
			<td><?php echo $qdata['BENUTZER_ROLE_ID'] ?></td>
			
			<td align="center"><a href="edit.php?BENUTZER_ID=<?php echo $qdata['BENUTZER_ID'] ?>"><button>Edit</button></td></a>
			
			<td align="center"><a href="operation.php?BENUTZER_ID=<?php echo $qdata['BENUTZER_ID'] ?>&qdelete=ok"><button>Delete</button></td></a>
		</tr>

		
			
		

		<?php } ?>

	</table>

<a href="insert.php"><button>ADD</button></a>
                
        </div>
        <footer>
            <?php
            include 'footer.php';
            ?>
        </footer>
    </div>
</div>






</body>
</html>