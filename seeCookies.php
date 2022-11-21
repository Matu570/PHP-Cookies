<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See the cookies</title>
</head>

<body>
    <!-- To see the cookies we must create the superglobal variable $_COOKIE. It is a associative array-->
    <?php
        if (isset($_COOKIE['myCookie'])){
            echo "<h2>".$_COOKIE['myCookie']."</h2>";
        }else{
            echo "<h2>No existe la cookie</h2>";
        }
        if (isset($_COOKIE['OneYear'])){
            echo "<h2>".$_COOKIE['OneYear']."</h2>";
        }else{
            echo "<h2>No existe la cookie</h2>";
        }
    ?>
    <a href="deleteCookies.php">Delete Cookies</a>

</body>

</html>