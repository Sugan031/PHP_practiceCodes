


<?php
include "header.html";

// $car_1 = "maruti";
// $$car_1 = "suzuki";

// $cars = array("Benz", "Bmw", "Audi");
// array_push($cars, "Nissan");
// array_push($cars, $car_1);
// array_push($cars, $maruti);
// foreach($cars as $car){
//     echo $car."<br>";
// }

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>This is the index page</h1>
	<br>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nemo, dolor ducimus recusandae,
		omnis corporis alias dicta ea iusto explicabo ab molestias quidem odio consequuntur.</p>
</body>
</html>
<?php

echo $_SERVER['PHP_SELF'];

echo $_SESSION['name'];
include "footer.html";
?>