<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="num"><br>
    <input type="submit" name="submit"><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $num = $_POST["num"];
        $sum =0;
        for($i=0;$i<strlen($num);$i++){
            $sum += pow($num[$i],strlen($num));
        }
        if($sum==$num){
            echo "It is armstrong";
        }
        else{
            echo "It is not armstrong";
        }
    }
    if(isset($_POST["submit"])){
        $num = $_POST["num"];
        $temp = $num;
        $sum =0;
        $power = strlen($num);
        while($num>0){
            $rem = intval($num) % 10;
            $sum += pow($rem,$power);
            $num = $num/10;
        }
        if($sum==$temp){
            echo "It is armstrong";
        }
        else{
            echo "It is not armstrong";
        }
    }








?>