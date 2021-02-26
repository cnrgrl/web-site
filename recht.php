<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>RECHTE TABELLE</title>
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
            <h1>RECHTE TABELLE</h1>
<hr>


<form name="search_form" method="post" action="recht.php">
        Search:<input type="text" name="search_box" value=""/>
        <input type="submit" name="search" value="filter">
    </form>




<table style="width: 60%" border="1">
    <tr>
        <th>NO</th>
        <th>RECHT_ID</th>
        <th>RECHT_NAME</th>
        <th width="50">FUNCTION1</th>
        <th width="50">FUNCTION2</th>
    </tr>
    <?php
    $data=$conn->prepare("SELECT * from RECHTE");
    $data->execute();
    $counter=0;

    while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $qdata['RECHTE_ID'] ?></td>
            <td><?php echo $qdata['RECHTE_NAME'] ?></td>
            <td align="center"><a href="edit_recht.php?RECHTE_ID=<?php echo $qdata['RECHTE_ID'] ?>"><button>Edit</button></td></a>
            <td align="center"><a href="operation.php?RECHTE_ID=<?php echo $qdata['RECHTE_ID'] ?>&qdelete=recht"><button>Delete</button></td></a>
        </tr>
    <?php 

} 










?>
</table>
<a href="insert_recht.php"><button>ADD</button></a>
                
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