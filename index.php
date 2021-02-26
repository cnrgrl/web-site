<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Verwaltung</title>
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
            <?php include 'content.php'?>
                
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
