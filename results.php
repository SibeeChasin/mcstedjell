<?php
    require 'connections.php';
?>

<?php
    session_start();
    if (isset($_SESSION["ID"])) {
        }
        else{
            header('Location: mcstedjell.php');
        }
?>


<!doctype html>
<html>
<head>
    <title>McSTEDJELL Search</title>
    <link rel="stylesheet" href="search.css">

</head> 
<body>

    <header>
        <marquee>McSTEDJELL!! YOUR SEARCH ENGINE FOR TROPICAL DISEASES!!...</marquee>
    </header>

    <div id="mains">
        <h1><?php echo $_SESSION["name"]?></h1><br />
        <h2>Information and Description</h2><br />
        <p><?php echo $_SESSION["info"] ?></p><br />
        <h2>Signs and Symptoms</h2><br />
        <p><?php echo $_SESSION["ss"] ?></p><br />
        <h2>Prevention Methods</h2><br />
        <p><?php echo $_SESSION["prev"] ?>i</p><br/>
    </div>

    <footer>
        <ul>
            <li><a href="#">Copyright @Afkanerd 2018</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </footer>
</body>

</html>