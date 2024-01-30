<?php
$a = 19;
$b = $a > 15 ? 20 : 5;
print_r("Value of b is " . $b);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ternary.php" method="post">
        Username : <input type="text" name="name"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
$regexValue = '/^[A-Z][a-z]*[\s][A-Z]$/';
$username = $_POST["name"];
    if(isset($_POST["submit"])){
        if(preg_match($regexValue,$username)){
            $ternary = strlen($username)>10 ? "Your name is big" : "Your name is short";
            echo $ternary;
        }
        else{
            die("Your name is not valid");
        }
    }
?>
