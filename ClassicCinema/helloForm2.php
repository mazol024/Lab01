<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Form</title>
</head>
<body>

<?php
    $file = basename($_SERVER['PHP_SELF']);
    if (strlen(trim($_GET['user']))> 0 ) {
        if (isset($_GET['submit'])) {
            $safe = htmlentities($_GET['user']);
            echo 'Username: ';
            echo $safe ;
            $safe2 = htmlentities($_GET['pswd']);
            echo "\nPassword: ";
            echo $safe2;
        }

    } else {
?>
    <form method="GET" name="myForm"
          action="<?php basename($_SERVER['PHP_SELF']);?>">
        <label> Username</label>
        <input type="text" name="user">
        <label>Password</label>
        <input type="password" name="pswd">
        <input type="submit" name="submit">
    </form>
<?php } ?>
</body>
</html>