<?php
    session_start();
    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST"){
    $_SESSION['name'] = $_POST["username"];
    if(isset($_SESSION['name'])){
    header("Location: index.php");
    exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    username: <input type="text" name="username">
    <br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>