<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            session_unset();
            session_destroy();
            header('location:index.php');
        ?>
    </body>
</html>
