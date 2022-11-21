<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cookies</title>
</head>
<body>
    <?php
        
        if($_COOKIE['myCookie']){
            unset($_COOKIE['myCookie']);
            setcookie('myCookie', '', time()-100);
        }
        header('Location:seeCookies.php');
    ?>
</body>
</html>