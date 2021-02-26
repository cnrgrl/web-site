<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>ROLE TABELLE</title>
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
            <h1>ROLE TABELLE</h1>
<hr>
<table style="width: 60%" border="1">
    <tr>
        <th>NO</th>
        <th>ROLE_ID</th>
        <th>ROLE_NAME</th>
        <th width="50">FUNCTION1</th>
        <th width="50">FUNCTION2</th>
    </tr>
    <?php
    $data=$conn->prepare("SELECT * from ROLE");
    $data->execute();
    $counter=0;
    while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $qdata['ROLE_ID'] ?></td>
            <td><?php echo $qdata['ROLE_NAME'] ?></td>
            <td align="center"><a href="edit_role.php?ROLE_ID=<?php echo $qdata['ROLE_ID'] ?>"><button>Edit</button></td></a>
            <td align="center"><a href="operation.php?ROLE_ID=<?php echo $qdata['ROLE_ID'] ?>&qdelete=role"><button>Delete</button></td></a>
        </tr>
    <?php } ?>
</table>
<a href="insert_role.php"><button>ADD</button></a>
                
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