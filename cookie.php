<?php
    //A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

    //setcookie(name, value, expire, path, domain, secure, httponly);

    $cookieName = "Cookie";
    $cookieValue = "Unibic";

    setcookie($cookieName,$cookieValue, time()+(86400),"/");
    // setcookie("drinkName","Coke",time()+(86400),"/");
    setcookie("drinkName","Coke",time()-(3600));

    echo (isset($_COOKIE[$cookieName]));
    echo ($_COOKIE[$cookieName]);
    echo(count($_COOKIE));

    // foreach ($_SERVER as $key => $value) {
    //    echo "{$key} => {$value}";
    // }

   
?> 