<?php
    // function sayhello($param = "Hello"){
    //    static $x =7;
    //     echo $x."<br>";
    //     $x++;
    //     print $param."<br>";
    // }

    // sayhello();
    // sayhello("HIII");
    // sayhello("Vanakam");

    // function myMessage(){
    //     echo "I am from Clarity!";
    // }

    // $function_holder = "myMessage";
    // $function_holder();

    // echo time()+86400;


    // setcookie("fav_food","FriedRice", time()+ (86400/2),"/");
    // setcookie("fav_drink","Coke", time()+ (86400/2),"/");
    // setcookie("fav_desert","IceCream", time()+ (86400/2),"/");

    // foreach($_COOKIE as $key=> $value){
    //     echo "$key => $value<br>";
    // }
$var = "PHP Tutorial";
        if( $_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"])){
            if(!empty($_POST["username"])){
            echo $_REQUEST["username"];
            }
            else{
                echo "give the valid username";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var ?></title>
</head>
<body>
    <form action="<?php htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
        UserName : <input type="text" name="username">
        <br>
        <!-- <input type="file"><br> -->
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>