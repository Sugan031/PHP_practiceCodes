<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="regex.php" method="post">
        Email : <input type="text" name="email"><br>
        Password : <input type="text" name="password"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<!--         <?php
         include "regex.html";
         ?> -->
<?php
    $emailPattern = '/^([a-z\d\.-]{1,64})@([a-z\d]+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/m';
    $passwordPattern = '/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s])([^\s]){8,20}$/m';

    $email = $_POST["email"];
    $password = $_POST["password"];

    if (isset($_POST["submit"])) {
        if (!preg_match($emailPattern, $email)) {
            echo "email is wrong";
        } elseif (!preg_match($passwordPattern, $password)) {
            echo "password is wrong";
        } else {
            echo "login successful";
        }

}
?>