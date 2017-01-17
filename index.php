<?php
    ob_start();
    session_start();

    require_once 'vars.php';
    require_once 'dbconnect.php';

    if (isset($_SESSION['user'])) {
        header("Location: home.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>webapp1</title>
    <?php include 'header_setup.html';?>
</head>

<body>
<?php include 'navbar.php';?>

<!--  
<div class="container" style="margin-top:50px; margin-left:5%; margin-right:5%"> */
-->
<div class="container" style="margin-top:50px">
    <div class="col-md-12">
        <h2>Index page</h2>
        <?php
        for ($i=0; $i < 100; $i++) {
        echo "Index: " . $i . "<br />";
        } 
        ?>
    </div>
</div>

<footer class="container-fluid text-center">
<?php include 'footer.php';?>
</footer>
</body>
</html>
<?php ob_end_flush(); ?>
