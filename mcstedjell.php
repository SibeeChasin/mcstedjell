<?php
    require 'connections.php';
?>

<?php

    if (isset($_POST['submit'])){

       $disease = $_POST['search'];

       $result = $con->query ("SELECT * FROM data where dname='$disease'");
       $row = $result->fetch_array(MYSQLI_BOTH);

       session_start();
       $_SESSION["ID"] = $row['did'];
       $_SESSION["name"] = $row['dname'];
       $_SESSION["info"] = $row['dinfo'];
       $_SESSION["ss"] = $row['dss'];
       $_SESSION["prev"] = $row['dprev'];

       header('Location: results.php');
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


    <img src="McSTEDJELL.jpg" alt="mcstedjell" style="width:400px;">
    <h1>McSTEDJELL</h1>
<div id="main">
    <form action="" method="post">
        <input type="text" name="search" id="search" placeholder="enter disease name"><br>
        <br>
        <input type="submit" name="submit" id="submit" value="search"><br>
        <br>
    </form>
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