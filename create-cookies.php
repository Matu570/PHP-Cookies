<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <!-- A cookie is a file that is stored on the user's computer for remember datas-->
    <?php
    // Create cookie
    // setcookie("name", "value", expiration, path, domain)

    // basic cookie
    setcookie("myCookie", "Value of my cookie");

    // Cookie with a duration of one year
    setcookie("OneYear", "Value of my cookie during one year", time()+(60*60*24*365));
    ?>
    <a href="seeCookies.php">See the cookies</a>
</body>

</html>