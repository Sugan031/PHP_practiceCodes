<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #tag{
            margin: auto;
            position: relative;
            left: 500px;
            color: blue;
        }
        #mybutton{
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: auto;
            position: relative;
            left: 600px;
            top: 50px;
        }
    </style>
</head>
<body>
    <h4 id="tag">Your account is successfully deleted</h4>
    <form action="" method="post">
    <button name="register" id="mybutton">register</button>
    </form>
</body>
</html>
<?php
    if (isset($_POST["register"])) {
        header("Location: /PHP_practiceCodes/register.php");
}
?>